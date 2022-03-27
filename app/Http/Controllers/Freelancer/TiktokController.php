<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Country;
use App\Models\Platform;
use App\Models\TemporaryGif1;
use App\Models\TemporaryGif2;
use App\Models\TemporaryGif3;
use App\Models\TemporaryLogo;
use App\Models\TemporaryThumbnail;
use App\Models\TemporaryVideo;
use App\Models\Tiktok;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TiktokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiktoks = Auth::user()->tiktoks()->latest()->get();
        return view('freelancer.tiktok.index',compact('tiktoks'));
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

        return view('freelancer.tiktok.create',compact('collections','countries','platforms'));
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
            'tiktok_link' =>'required',
            'impression' =>'required',
            'days' =>'required',
            'ad_cost' =>'required',
            'conversation' =>'required',
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
            'saturation' =>'required',
            'collection' =>'required',
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
        $tiktoks = new Tiktok();
        $tiktoks->user_id = Auth::id();
        $tiktoks->slug = $slug;
        $tiktoks->title = $request->title;
        $tiktoks->sell_on = $request->sell_on;
        $tiktoks->price = $request->price;
        $tiktoks->cost = $request->cost;
        $tiktoks->profit = $request->profit;
        $tiktoks->order = $request->order;
        $tiktoks->revinue = $request->revinue;
        $tiktoks->impression = $request->impression;
        $tiktoks->days = $request->days;
        $tiktoks->ad_cost = $request->ad_cost;
        $tiktoks->conversation = $request->conversation;
        $tiktoks->alaxa = $request->alaxa;
        $tiktoks->page_name = $request->page_name;
        $tiktoks->shopify_website = $request->shopify_website;
        $tiktoks->aliexpress_link = $request->aliexpress_link;
        $tiktoks->tiktok_link = $request->tiktok_link;
        $tiktoks->youtube_link = $request->youtube_link;
        $tiktoks->shopify_link = $request->shopify_link;
        $tiktoks->image_one = $request->image_one;
        $tiktoks->image_two = $request->image_two;
        $tiktoks->image_three = $request->image_three;
        $tiktoks->image_four = $request->image_four;
        $tiktoks->image_five = $request->image_five;
        $tiktoks->competitor1 = $request->competitor1;
        $tiktoks->competitor2 = $request->competitor2;
        $tiktoks->competitor3 = $request->competitor3;
        $tiktoks->competitor4 = $request->competitor4;
        $tiktoks->competitor5 = $request->competitor5;
        $tiktoks->amazon = $request->amazon;
        $tiktoks->ebay = $request->ebay;
        $tiktoks->ad_create_date = $request->ad_create_date;
        $tiktoks->ad_seen_date = $request->ad_seen_date;
        $tiktoks->ad_content = $request->ad_content;
        $tiktoks->body = $request->body;
        $tiktoks->is_approved = false;
        $tiktoks->page_logo = $logoNames;
        $tiktoks->thumbnail = $thumbnailNames;
        $tiktoks->gif_one = $Gif1Names;
        $tiktoks->gif_two = $Gif2Names;
        $tiktoks->gif_three = $Gif3Names;
        $tiktoks->video = $videoNames;

        $countrys = $request->input('country');
        $countrys = implode(',', $countrys);
        $tiktoks->country = $countrys;

        $tiktoks->action = $request->action;

        $collection = $request->input('collection');
        $collection = implode(',', $collection);
        $tiktoks->collection = $collection;

        $tiktoks->formate = $request->formate;

        $platform = $request->input('platform');
        $platform = implode(',', $platform);
        $tiktoks->platform = $platform;

        $opportunity = $request->input('opportunity');
        $opportunity = implode(',', $opportunity);
        $tiktoks->opportunity = $opportunity;

        $tiktoks->saturation = $request->saturation;
        $tiktoks->privacy = $request->privacy;

        $tiktoks->save();
        
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
        return redirect()->route('freelancer.tiktok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function show(Tiktok $tiktok)
    {
        return view('freelancer.tiktok.show',compact('tiktok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiktok $tiktok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiktok $tiktok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiktok $tiktok)
    {
        //
    }
}
