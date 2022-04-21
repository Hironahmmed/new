<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aliexpress;
use App\Models\Amazon;
use App\Models\Facebook;
use App\Models\Shopify;
use App\Models\Tiktok;
use DB;

class DemoCustomerController extends Controller
{
    public function index()
    {
        // dd('s');
        $totalFacebookAd = Facebook::count() + 4000;
        $totalTiktokAd = Tiktok::count() + 3000;
        $aliexpress = Aliexpress::count() + 1500;
        $amazon = Amazon::count() + 1500;
        $shopify = Shopify::count() + 100;
        $totalProduct = $totalFacebookAd + $totalTiktokAd + $aliexpress + $amazon + $shopify;
        return view('demo_customer.dashboard',compact('totalFacebookAd','totalTiktokAd','aliexpress','amazon','totalProduct'));
    }

    public function facebookAd(Request $request)
    {
        $collections = DB::table('facebooks')->select('collection')->distinct()->get()->pluck('collection')->sort();
        $countrys = DB::table('facebooks')->select('country')->distinct()->get()->pluck('country')->sort();
        $platforms = DB::table('facebooks')->select('platform')->distinct()->get()->pluck('platform')->sort();
        $buttonTypes = DB::table('facebooks')->select('action')->distinct()->get()->pluck('action')->sort();
        $productTypes = DB::table('facebooks')->select('opportunity')->distinct()->get()->pluck('opportunity')->sort();
        $saturations = DB::table('facebooks')->select('saturation')->distinct()->get()->pluck('saturation')->sort();
        $media = DB::table('facebooks')->select('formate')->distinct()->get()->pluck('formate')->sort();


        $facebook = Facebook::query();
        if($request->filled('searchtext')){
            $facebook->where('title','LIKE', "%$request->searchtext%")->limit(15)->get();
        }
        if($request->filled('collection')){
            $facebook->where('collection', $request->collection);
        }
        if($request->filled('country')){
            $facebook->where('country', $request->country);
        }
        if($request->filled('platform')){
            $facebook->where('platform', $request->platform);
        }
        if($request->filled('saturation')){
            $facebook->where('saturation', $request->saturation);
        }
        if($request->filled('buttonType')){
            $facebook->where('action', $request->buttonType);
        }
        if($request->filled('productType')){
            $facebook->where('opportunity', $request->productType);
        }
        if($request->filled('media')){
            $facebook->where('formate', $request->media);
        }

        if($request->filled('media')){
            $facebook->where('formate', $request->media);
        }

        if($request->filled('media')){
            $facebook->where('formate', $request->media);
        }

        return view('demo_customer.facebook', [
            'collections' => $collections,
            'countrys' => $countrys,
            'platforms' => $platforms,
            'buttonTypes' => $buttonTypes,
            'productTypes' => $productTypes,
            'saturations' => $saturations,
            'media' => $media,
            'facebook' => $facebook->approved()->limit(15)->get(),
        ]);
    }

    public function facebookDetails($slug){

        $facebook = Facebook::where('slug',$slug)->first();

        return view('demo_customer.facebookdetails',compact('facebook'));
    }

    // Tiktok Ad 
    public function tiktokad(Request $request)
    {

                $collections = DB::table('tiktoks')->select('collection')->distinct()->get()->pluck('collection')->sort();
                $countrys = DB::table('tiktoks')->select('country')->distinct()->get()->pluck('country')->sort();
                $platforms = DB::table('tiktoks')->select('platform')->distinct()->get()->pluck('platform')->sort();
                $buttonTypes = DB::table('tiktoks')->select('action')->distinct()->get()->pluck('action')->sort();
                $productTypes = DB::table('tiktoks')->select('opportunity')->distinct()->get()->pluck('opportunity')->sort();
                $saturations = DB::table('tiktoks')->select('saturation')->distinct()->get()->pluck('saturation')->sort();

                $tiktok = Tiktok::query();
                if($request->filled('searchtext')){
                    $tiktok->where('title','LIKE', "%$request->searchtext%")->limit(15)->get();
                }
                if($request->filled('collection')){
                    $tiktok->where('collection', $request->collection);
                }
                if($request->filled('country')){
                    $tiktok->where('country', $request->country);
                }
                if($request->filled('platform')){
                    $tiktok->where('platform', $request->platform);
                }
                if($request->filled('saturation')){
                    $tiktok->where('saturation', $request->saturation);
                }
                if($request->filled('buttonType')){
                    $tiktok->where('action', $request->buttonType);
                }
                if($request->filled('productType')){
                    $tiktok->where('opportunity', $request->productType);
                }
                if($request->filled('media')){
                    $tiktok->where('formate', $request->media);
                }

                if($request->filled('media')){
                    $tiktok->where('formate', $request->media);
                }

                return view('demo_customer.tiktok', [
                    'collections' => $collections,
                    'countrys' => $countrys,
                    'platforms' => $platforms,
                    'buttonTypes' => $buttonTypes,
                    'productTypes' => $productTypes,
                    'saturations' => $saturations,
                    'tiktok' => $tiktok->approved()->limit(15)->get(),
                ]);
    }

    public function tiktokDetails($slug){
        $tiktok = Tiktok::where('slug',$slug)->first();
        return view('demo_customer.tiktokdetails',compact('tiktok'));
    }

    // Aliexpress
    public function aliexpress(Request $request){

        $aliexpress = Aliexpress::latest()->approved()->limit(15)->get();
        return view('demo_customer.aliexpress',compact('aliexpress'));


    }

    // Amazon
    public function amazon(Request $request){
        $amazon = Amazon::approved()->limit(15)->get();

        // dd($amazon);
        return view('demo_customer.amazon',compact('amazon'));
    }

    // Shopify
    public function shopify(Request $request){

        $shopify = Shopify::approved()->limit(4)->get();
        // dd($shopify);
        return view('demo_customer.shopify',compact('shopify'));

    }
}
