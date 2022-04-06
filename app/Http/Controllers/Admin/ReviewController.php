<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::where('is_approved',true)->paginate(20);
        return view('admin.review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
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
            'name' => 'required',
            'designation' => 'required',
            'rating' => 'required',
            'body' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->file('image');
        if(isset($image)){
            // make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('review')){
                Storage::disk('public')->makeDirectory('review');
            }
            $postImage = Image::make($image)->resize(400,400)->save(storage_path('app/public/review').'/'.$imageName);
            //Storage::disk('public')->put('post/'.$imageName,$postImage);
        } else{
            $imageName = "default.png";
        }

        $review = new Review();
        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->rating = $request->rating;
        $review->body = $request->body;
        $review->image = $imageName;
        $review->is_approved = true;
        $review->save();

        Toastr::success('Review Successfully Saved','Success');
        return redirect()->route('admin.review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('admin.review.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'rating' => 'required',
            'body' => 'required',
        ]);


        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->rating = $request->rating;
        $review->body = $request->body;
        $review->is_approved = true;


        $review->save();

        Toastr::success('Review Successfully Updated','Success');
        return redirect()->route('admin.review.index');
    }



    // show all pending post
    public function pendingReview(){
        $reviews = Review::where('is_approved',false)->paginate(20);
        return view('admin.review.pending',compact('reviews'));
    }

    // Review Approval
    public function approval($id){
        $review = Review::find($id);
        if($review->is_approved == false){
            $review->is_approved = true;
            $review->save();
            Toastr::success('Product Successfully Approved','Success');
            
        } else{
            Toastr::success('Product already approved','Success');
        }
        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        if(Storage::disk('public')->exists('review/'.$review->image)){
            Storage::disk('public')->delete('review/'.$review->image);
        }
        $review->delete();

        Toastr::success('Review Successfully deleted','Success');
        return redirect()->back();
    }
}
