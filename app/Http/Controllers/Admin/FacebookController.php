<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Country;
use App\Models\Facebook;
use App\Models\Platform;
use App\Models\TemporaryGif1;
use App\Models\TemporaryGif2;
use App\Models\TemporaryGif3;
use App\Models\TemporaryLogo;
use App\Models\TemporaryThumbnail;
use App\Models\TemporaryVideo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facebooks = Facebook::latest()->paginate(10);
        return view('admin.facebook.index',compact('facebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::all();
        $countries = Country::all();
        $platforms = Platform::all();

        return view('admin.facebook.create',compact('collections','countries','platforms'));
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
            'title' =>'required',
            'sell_on' => 'required',
            'price' =>'required',
            'cost' =>'required',
            'profit' =>'required',
            'order' =>'required',
            'revinue' =>'required',
            'alaxa' =>'required',
            'aliexpress_link' =>'required',
            'ad_link' =>'required',
            'shopify_link' =>'required',
            'page_name' => 'required',
            'shopify_website' => 'required',
            'image_one' =>'required',
            'image_two' =>'required',
            'image_three' =>'required',
            'image_four' =>'required',
            'image_five' =>'required',
            'competitor1' =>'required',
            'amazon' =>'required',
            'ad_create_date' =>'required',
            'ad_seen_date' =>'required',
            'body' =>'required',
            'opportunity' =>'required',
            'saturation' =>'required',
            'collection' =>'required',
            'age' =>'required',
            'gender' =>'required',
            'country' =>'required',
            'platform' =>'required',
            'formate' =>'required',
            'privacy' =>'required',
            'action' => 'required'

        ]);
        $temporaryThumbnail = TemporaryThumbnail::where('filename',$request->thumbnail)->first();
        if($temporaryThumbnail){
            $thumbnailNames = $temporaryThumbnail->filename;
        } else{
            $thumbnailNames = '';
        }

        $temporaryVideo = TemporaryVideo::where('filename',$request->video)->first();
        if($temporaryVideo){
            $videoNames = $temporaryVideo->filename;
        } else{
            $videoNames = '';
        }
        
        $temporaryGif1 = TemporaryGif1::where('filename',$request->gif1)->first();
        $Gif1Names = $temporaryGif1->filename;

        $temporaryGif2 = TemporaryGif2::where('filename',$request->gif2)->first();
        $Gif2Names = $temporaryGif2->filename;

        $temporaryGif3 = TemporaryGif3::where('filename',$request->gif3)->first();
        $Gif3Names = $temporaryGif3->filename;

        $temporaryLogo = TemporaryLogo::where('filename',$request->page_logo)->first();
        $logoNames = $temporaryLogo->filename;

        $slug = now()->timestamp;

        $facebooks = new Facebook();
        $facebooks->user_id = Auth::id();
        $facebooks->slug = $slug;
        $facebooks->title = $request->title;
        $facebooks->sell_on = $request->sell_on;
        $facebooks->price = $request->price;
        $facebooks->cost = $request->cost;
        $facebooks->profit = $request->profit;
        $facebooks->order = $request->order;
        $facebooks->revinue = $request->revinue;
        $facebooks->alaxa = $request->alaxa;
        $facebooks->page_name = $request->page_name;
        $facebooks->shopify_website = $request->shopify_website;
        $facebooks->aliexpress_link = $request->aliexpress_link;
        $facebooks->ad_link = $request->ad_link;
        $facebooks->youtube_link = $request->youtube_link;
        $facebooks->shopify_link = $request->shopify_link;
        $facebooks->image_one = $request->image_one;
        $facebooks->image_two = $request->image_two;
        $facebooks->image_three = $request->image_three;
        $facebooks->image_four = $request->image_four;
        $facebooks->image_five = $request->image_five;
        $facebooks->competitor1 = $request->competitor1;
        $facebooks->competitor2 = $request->competitor2;
        $facebooks->competitor3 = $request->competitor3;
        $facebooks->competitor4 = $request->competitor4;
        $facebooks->competitor5 = $request->competitor5;
        $facebooks->amazon = $request->amazon;
        $facebooks->ebay = $request->ebay;
        $facebooks->ad_create_date = $request->ad_create_date;
        $facebooks->ad_seen_date = $request->ad_seen_date;
        $facebooks->ad_content = $request->ad_content;
        $facebooks->body = $request->body;
        $facebooks->is_approved = true;
        $facebooks->page_logo = $logoNames;
        $facebooks->thumbnail = $thumbnailNames;
        $facebooks->gif_one = $Gif1Names;
        $facebooks->gif_two = $Gif2Names;
        $facebooks->gif_three = $Gif3Names;
        $facebooks->video = $videoNames;

        $ages = $request->input('age');
        $ages = implode(',', $ages);
        $facebooks->age = $ages;

        $genders = $request->input('gender');
        $gender = implode(',', $genders);
        $facebooks->gender = $gender;

        $countrys = $request->input('country');
        $countrys = implode(',', $countrys);
        $facebooks->country = $countrys;

        $facebooks->action = $request->action;

        $collection = $request->input('collection');
        $collection = implode(',', $collection);
        $facebooks->collection = $collection;

        $facebooks->formate = $request->formate;

        $platform = $request->input('platform');
        $platform = implode(',', $platform);
        $facebooks->platform = $platform;

        $opportunity = $request->input('opportunity');
        $opportunity = implode(',', $opportunity);
        $facebooks->opportunity = $opportunity;


        $facebooks->saturation = $request->saturation;
        $facebooks->privacy = $request->privacy;

        $facebooks->save();
        
        if ($temporaryThumbnail){
            $temporaryThumbnail->delete();
        } else{
            '';
        }
        if ($temporaryVideo){
            $temporaryVideo->delete();
        } else{
            '';
        }
        $temporaryGif1->delete();
        $temporaryGif2->delete();
        $temporaryGif3->delete();
        $temporaryLogo->delete();

        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('admin.facebook.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function show(Facebook $facebook)
    {
        return view('admin.facebook.show',compact('facebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Facebook $facebook)
    {
        $collections = Collection::all();
        $countries = Country::all();
        $platforms = Platform::all();
        $action = explode(',', $facebook->action);
        $opportunity = explode(',', $facebook->opportunity);
        $saturation = explode(',', $facebook->saturation);
        $collection = explode(',', $facebook->collection);
        $age = explode(',', $facebook->age);
        $gender = explode(',', $facebook->gender);
        $country = explode(',', $facebook->country);
        $platform = explode(',', $facebook->platform);
        $formate = explode(',', $facebook->formate);
        $privacy = explode(',', $facebook->privacy);

        return view('admin.facebook.edit',[
            'facebook' => $facebook,
            'opportunity' => $opportunity,
            'action' => $action,
            'saturation' => $saturation,
            'collection' => $collection,
            'collections' => $collections,
            'countries' => $countries,
            'platforms' => $platforms,
            'age' => $age,
            'gender' => $gender,
            'country' => $country,
            'platform' => $platform,
            'formate' => $formate,
            'privacy' => $privacy,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facebook $facebook)
    {
        $this->validate($request,[
            'title' =>'required',
            'sell_on' => 'required',
            'price' =>'required',
            'cost' =>'required',
            'profit' =>'required',
            'order' =>'required',
            'revinue' =>'required',
            'alaxa' =>'required',
            'aliexpress_link' =>'required',
            'ad_link' =>'required',
            'shopify_link' =>'required',
            'page_name' => 'required',
            'shopify_website' => 'required',
            'image_one' =>'required',
            'image_two' =>'required',
            'image_three' =>'required',
            'image_four' =>'required',
            'image_five' =>'required',
            'competitor1' =>'required',
            'amazon' =>'required',
            'ad_create_date' =>'required',
            'ad_seen_date' =>'required',
            'body' =>'required',
            'opportunity' =>'required',
            'saturation' =>'required',
            'collection' =>'required',
            'age' =>'required',
            'gender' =>'required',
            'country' =>'required',
            'platform' =>'required',
            'formate' =>'required',
            'privacy' =>'required',
            'action' => 'required'

        ]);

        $thumbnailNames = $facebook->thumbnail;
        $logoNames = $facebook->page_logo;
        $videoNames = $facebook->video;
        $Gif1Names = $facebook->gif_one;
        $Gif2Names = $facebook->gif_two;
        $Gif3Names = $facebook->gif_three;
        $slug = $facebook->slug;

        $facebook->user_id = Auth::id();
        $facebook->slug = $slug;
        $facebook->title = $request->title;
        $facebook->sell_on = $request->sell_on;
        $facebook->price = $request->price;
        $facebook->cost = $request->cost;
        $facebook->profit = $request->profit;
        $facebook->order = $request->order;
        $facebook->revinue = $request->revinue;
        $facebook->alaxa = $request->alaxa;
        $facebook->page_name = $request->page_name;
        $facebook->shopify_website = $request->shopify_website;
        $facebook->aliexpress_link = $request->aliexpress_link;
        $facebook->ad_link = $request->ad_link;
        $facebook->youtube_link = $request->youtube_link;
        $facebook->shopify_link = $request->shopify_link;
        $facebook->image_one = $request->image_one;
        $facebook->image_two = $request->image_two;
        $facebook->image_three = $request->image_three;
        $facebook->image_four = $request->image_four;
        $facebook->image_five = $request->image_five;
        $facebook->competitor1 = $request->competitor1;
        $facebook->competitor2 = $request->competitor2;
        $facebook->competitor3 = $request->competitor3;
        $facebook->competitor4 = $request->competitor4;
        $facebook->competitor5 = $request->competitor5;
        $facebook->amazon = $request->amazon;
        $facebook->ebay = $request->ebay;
        $facebook->ad_create_date = $request->ad_create_date;
        $facebook->ad_seen_date = $request->ad_seen_date;
        $facebook->ad_content = $request->ad_content;
        $facebook->body = $request->body;
        $facebook->is_approved = true;
        $facebook->page_logo = $logoNames;
        $facebook->thumbnail = $thumbnailNames;
        $facebook->gif_one = $Gif1Names;
        $facebook->gif_two = $Gif2Names;
        $facebook->gif_three = $Gif3Names;
        $facebook->video = $videoNames;

        $ages = $request->input('age');
        $ages = implode(',', $ages);
        $facebook->age = $ages;

        $genders = $request->input('gender');
        $gender = implode(',', $genders);
        $facebook->gender = $gender;

        $countrys = $request->input('country');
        $countrys = implode(',', $countrys);
        $facebook->country = $countrys;

        $facebook->action = $request->action;

        $collection = $request->input('collection');
        $collection = implode(',', $collection);
        $facebook->collection = $collection;

        $facebook->formate = $request->formate;

        $platform = $request->input('platform');
        $platform = implode(',', $platform);
        $facebook->platform = $platform;

        $opportunity = $request->input('opportunity');
        $opportunity = implode(',', $opportunity);
        $facebook->opportunity = $opportunity;

        $facebook->saturation = $request->saturation;
        $facebook->privacy = $request->privacy;

        $facebook->save();
        
        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('admin.facebook.index');
    }

    // Loadad Approval
    public function approval($id){
        $facebook = Facebook::find($id);
        if($facebook->is_approved == false){
            $facebook->is_approved = true;
            $facebook->save();
            Toastr::success('Product Successfully Approved','Success');
            
        } else{
            Toastr::success('Product already approved','Success');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facebook $facebook)
    {
        if(Storage::disk('public')->exists('gif/'.$facebook->gif_one)){
            Storage::disk('public')->delete('gif/'.$facebook->gif_one);
        } elseif(Storage::disk('public')->exists('gif/'.$facebook->gif_two)){
            Storage::disk('public')->delete('gif/'.$facebook->gif_two);
        } elseif(Storage::disk('public')->exists('gif/'.$facebook->gif_three)){
            Storage::disk('public')->delete('gif/'.$facebook->gif_three);
        } elseif(Storage::disk('public')->exists('thumbnail/'.$facebook->thumbnail)){
            Storage::disk('public')->delete('thumbnail/'.$facebook->thumbnail);
        } elseif(Storage::disk('public')->exists('video/'.$facebook->video)){
            Storage::disk('public')->delete('video/'.$facebook->video);
        } elseif(Storage::disk('public')->exists('logo/'.$facebook->logo_name)){
            Storage::disk('public')->delete('logo/'.$facebook->logo_name);
        } 

        $facebook->delete();

        Toastr::success('Product Successfully deleted','Success');
        return redirect()->route('admin.facebook.index');
    }
}
