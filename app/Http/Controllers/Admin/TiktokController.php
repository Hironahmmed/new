<?php

namespace App\Http\Controllers\Admin;

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
use Illuminate\Support\Facades\Storage;

class TiktokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiktoks = Tiktok::where('is_approved',true)->latest()->paginate(20);
        return view('admin.tiktok.index',compact('tiktoks'));
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

        return view('admin.tiktok.create',compact('collections','countries','platforms'));
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
        $tiktoks->is_approved = true;
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
        return redirect()->route('admin.tiktok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function show(Tiktok $tiktok)
    {
        return view('admin.tiktok.show',compact('tiktok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function edit(Tiktok $tiktok)
    {
        $collections = Collection::all();
        $countries = Country::all();
        $platforms = Platform::all();
        $action = explode(',', $tiktok->action);
        $opportunity = explode(',', $tiktok->opportunity);
        $saturation = explode(',', $tiktok->saturation);
        $collection = explode(',', $tiktok->collection);
        $country = explode(',', $tiktok->country);
        $platform = explode(',', $tiktok->platform);
        $formate = explode(',', $tiktok->formate);
        $privacy = explode(',', $tiktok->privacy);

        return view('admin.tiktok.edit',[
            'tiktok' => $tiktok,
            'opportunity' => $opportunity,
            'action' => $action,
            'saturation' => $saturation,
            'collection' => $collection,
            'collections' => $collections,
            'countries' => $countries,
            'platforms' => $platforms,
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
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiktok $tiktok)
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
            'opportunity' =>'required',
            'saturation' =>'required',
            'collection' =>'required',
            'country' =>'required',
            'platform' =>'required',
            'formate' =>'required',
            'privacy' =>'required',
            'action' => 'required'
        ]);
        $thumbnailNames = $tiktok->thumbnail;
        $logoNames = $tiktok->page_logo;
        $videoNames = $tiktok->video;
        $Gif1Names = $tiktok->gif_one;
        $Gif2Names = $tiktok->gif_two;
        $Gif3Names = $tiktok->gif_three;
        $slug = $tiktok->slug;

        $slug = now()->timestamp;
        $tiktok->user_id = Auth::id();
        $tiktok->slug = $slug;
        $tiktok->title = $request->title;
        $tiktok->sell_on = $request->sell_on;
        $tiktok->price = $request->price;
        $tiktok->cost = $request->cost;
        $tiktok->profit = $request->profit;
        $tiktok->order = $request->order;
        $tiktok->revinue = $request->revinue;
        $tiktok->impression = $request->impression;
        $tiktok->days = $request->days;
        $tiktok->ad_cost = $request->ad_cost;
        $tiktok->conversation = $request->conversation;
        $tiktok->alaxa = $request->alaxa;
        $tiktok->page_name = $request->page_name;
        $tiktok->shopify_website = $request->shopify_website;
        $tiktok->aliexpress_link = $request->aliexpress_link;
        $tiktok->tiktok_link = $request->tiktok_link;
        $tiktok->youtube_link = $request->youtube_link;
        $tiktok->shopify_link = $request->shopify_link;
        $tiktok->image_one = $request->image_one;
        $tiktok->image_two = $request->image_two;
        $tiktok->image_three = $request->image_three;
        $tiktok->image_four = $request->image_four;
        $tiktok->image_five = $request->image_five;
        $tiktok->competitor1 = $request->competitor1;
        $tiktok->competitor2 = $request->competitor2;
        $tiktok->competitor3 = $request->competitor3;
        $tiktok->competitor4 = $request->competitor4;
        $tiktok->competitor5 = $request->competitor5;
        $tiktok->amazon = $request->amazon;
        $tiktok->ebay = $request->ebay;
        $tiktok->ad_create_date = $request->ad_create_date;
        $tiktok->ad_seen_date = $request->ad_seen_date;
        $tiktok->ad_content = $request->ad_content;
        $tiktok->body = $request->body;
        $tiktok->is_approved = true;

        $tiktok->page_logo = $logoNames;
        $tiktok->thumbnail = $thumbnailNames;
        $tiktok->gif_one = $Gif1Names;
        $tiktok->gif_two = $Gif2Names;
        $tiktok->gif_three = $Gif3Names;
        $tiktok->video = $videoNames;

        $countrys = $request->input('country');
        $countrys = implode(',', $countrys);
        $tiktok->country = $countrys;

        $tiktok->action = $request->action;

        $collection = $request->input('collection');
        $collection = implode(',', $collection);
        $tiktok->collection = $collection;

        $tiktok->formate = $request->formate;

        $platform = $request->input('platform');
        $platform = implode(',', $platform);
        $tiktok->platform = $platform;

        $opportunity = $request->input('opportunity');
        $opportunity = implode(',', $opportunity);
        $tiktok->opportunity = $opportunity;

        $tiktok->saturation = $request->saturation;
        $tiktok->privacy = $request->privacy;

        $tiktok->save();
        
        Toastr::success('Product Successfully Updated','Success');
        return redirect()->route('admin.tiktok.index');
    }


    // show all pending post
    public function pendingTiktok(){
        $tiktoks = Tiktok::where('is_approved',false)->paginate(20);
        return view('admin.tiktok.pending',compact('tiktoks'));
    }

    // Tiktok Approval
    public function approval($id){
        $tiktok = Tiktok::find($id);
        if($tiktok->is_approved == false){
            $tiktok->is_approved = true;
            $tiktok->save();
            Toastr::success('Product Successfully Approved','Success');
            
        } else{
            Toastr::success('Product already approved','Success');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiktok  $tiktok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiktok $tiktok)
    {
        if(Storage::disk('public')->exists('gif/'.$tiktok->gif_one)){
            Storage::disk('public')->delete('gif/'.$tiktok->gif_one);
        } elseif(Storage::disk('public')->exists('gif/'.$tiktok->gif_two)){
            Storage::disk('public')->delete('gif/'.$tiktok->gif_two);
        } elseif(Storage::disk('public')->exists('gif/'.$tiktok->gif_three)){
            Storage::disk('public')->delete('gif/'.$tiktok->gif_three);
        } elseif(Storage::disk('public')->exists('thumbnail/'.$tiktok->thumbnail)){
            Storage::disk('public')->delete('thumbnail/'.$tiktok->thumbnail);
        } elseif(Storage::disk('public')->exists('video/'.$tiktok->video)){
            Storage::disk('public')->delete('video/'.$tiktok->video);
        } elseif(Storage::disk('public')->exists('logo/'.$tiktok->logo_name)){
            Storage::disk('public')->delete('logo/'.$tiktok->logo_name);
        } 

        $tiktok->delete();

        Toastr::success('Ad Successfully deleted','Success');
        return redirect()->route('admin.tiktok.index');
    }
}
