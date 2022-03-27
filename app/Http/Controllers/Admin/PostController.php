<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subscriber;
use App\Models\Tag;
use App\Notifications\NewPostNotify;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));$categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'categories' => 'required',
            'tags' => 'required',
            'meta_desc' => 'required',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            // make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('post')){
                Storage::disk('public')->makeDirectory('post');
            }
            $postImage = Image::make($image)->resize(1024,548)->save(storage_path('app/public/post').'/'.$imageName);
            //Storage::disk('public')->put('post/'.$imageName,$postImage);
        } else{
            $imageName = "default.png";
        }

        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->body = $request->body;
        $post->meta_desc = $request->meta_desc;
        if(isset($request->status)){
            $post->status = true;
        } else{
            $post->status = false;
        }
        // Featured Post
        if(isset($request->featured)){
            $post->featured = true;
        } else{
            $post->featured = false;
        }
        // Popular Post
        if(isset($request->popular)){
            $post->popular = true;
        } else{
            $post->popular = false;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);
        $subscribes = Subscriber::all();
        foreach($subscribes as $subscriber){
            Notification::route('mail',$subscriber->email)
            ->notify(new NewPostNotify($post));
        }
        
        Toastr::success('Post Successfully Saved','Success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image',
            'categories' => 'required',
            'tags' => 'required',
            'meta_desc' => 'required',
            'body' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            // make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('post')){
                Storage::disk('public')->makeDirectory('post');
            }
            // Old image delete
            if(Storage::disk('public')->exists('post/'.$post->image)){
                Storage::disk('public')->delete('post/'.$post->image);
            }

            $postImage = Image::make($image)->resize(1024,548)->save(storage_path('app/public/post').'/'.$imageName);
            // Storage::disk('public')->put('post/'.$imageName,$postImage );
        } else{
            $imageName = $post->image;
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->body = $request->body;
        $post->meta_desc = $request->meta_desc;
        if(isset($request->status)){
            $post->status = true;
        } else{
            $post->status = false;
        }
        // Featured Post
        if(isset($request->featured)){
            $post->featured = true;
        } else{
            $post->featured = false;
        }
        // Popular Post
        if(isset($request->popular)){
            $post->popular = true;
        } else{
            $post->popular = false;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        Toastr::success('Post Successfully Updated','Success');
        return redirect()->route('admin.post.index');
    }

    // Post Approval
    public function approval($id){
        $post = Post::find($id);
        if($post->is_approved == false){
            $post->is_approved = true;
            $post->save();
            $subscribes = Subscriber::all();
            foreach($subscribes as $subscriber){
                Notification::route('mail',$subscriber->email)
                ->notify(new NewPostNotify($post));
            }
            Toastr::success('Post Successfully Approved','Success');
            
        } else{
           Toastr::success('Post already approved','Success');
        }
        return redirect()->back();
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(Storage::disk('public')->exists('post/'.$post->image)){
            Storage::disk('public')->delete('post/'.$post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();

        Toastr::success('Post Successfully deleted','Success');
        return redirect()->route('admin.post.index');
    }
}
