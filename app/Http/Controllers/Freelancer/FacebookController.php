<?php

namespace App\Http\Controllers\Freelancer;

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

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facebooks = Auth::user()->facebooks()->latest()->get();
        return view('freelancer.facebook.index',compact('facebooks'));
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

        return view('freelancer.facebook.create',compact('collections','countries','platforms'));
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
        $facebooks->is_approved = false;
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
        return redirect()->route('freelancer.facebook.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function show(Facebook $facebook)
    {
        return view('freelancer.facebook.show',compact('facebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Facebook $facebook)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facebook  $facebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facebook $facebook)
    {
        //
    }
}
