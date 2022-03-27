<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Aliexpress;
use App\Models\Amazon;
use App\Models\Collection;
use App\Models\Country;
use App\Models\Facebook;
use App\Models\Platform;
use App\Models\Shopify;
use App\Models\Tiktok;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function facebookAd(Request $request){

        if(!Auth::user()->stripe_id == null){
            # code...
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {

                $collections = DB::table('facebooks')->select('collection')->distinct()->get()->pluck('collection')->sort();
                $countrys = DB::table('facebooks')->select('country')->distinct()->get()->pluck('country')->sort();
                $platforms = DB::table('facebooks')->select('platform')->distinct()->get()->pluck('platform')->sort();
                $buttonTypes = DB::table('facebooks')->select('action')->distinct()->get()->pluck('action')->sort();
                $productTypes = DB::table('facebooks')->select('opportunity')->distinct()->get()->pluck('opportunity')->sort();
                $saturations = DB::table('facebooks')->select('saturation')->distinct()->get()->pluck('saturation')->sort();
                $media = DB::table('facebooks')->select('formate')->distinct()->get()->pluck('formate')->sort();


                $facebook = Facebook::query();
                if($request->filled('searchtext')){
                    $facebook->where('title','LIKE', "%$request->searchtext%")->get();
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

                return view('customer.facebook', [
                    'collections' => $collections,
                    'countrys' => $countrys,
                    'platforms' => $platforms,
                    'buttonTypes' => $buttonTypes,
                    'productTypes' => $productTypes,
                    'saturations' => $saturations,
                    'media' => $media,
                    'facebook' => $facebook->latest()->approved()->get(),
                ]);
            }

            if(Auth::user()->subscription('main')->onGracePeriod() && !Auth::user()->subscription('main')->cancelled()){
                $collections = DB::table('facebooks')->select('collection')->distinct()->get()->pluck('collection')->sort();
                $countrys = DB::table('facebooks')->select('country')->distinct()->get()->pluck('country')->sort();
                $platforms = DB::table('facebooks')->select('platform')->distinct()->get()->pluck('platform')->sort();
                $buttonTypes = DB::table('facebooks')->select('action')->distinct()->get()->pluck('action')->sort();
                $productTypes = DB::table('facebooks')->select('opportunity')->distinct()->get()->pluck('opportunity')->sort();
                $saturations = DB::table('facebooks')->select('saturation')->distinct()->get()->pluck('saturation')->sort();
                $media = DB::table('facebooks')->select('formate')->distinct()->get()->pluck('formate')->sort();


                $facebook = Facebook::query();
                if($request->filled('searchtext')){
                    $facebook->where('title','LIKE', "%$request->searchtext%")->get();
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

                return view('customer.facebook', [
                    'collections' => $collections,
                    'countrys' => $countrys,
                    'platforms' => $platforms,
                    'buttonTypes' => $buttonTypes,
                    'productTypes' => $productTypes,
                    'saturations' => $saturations,
                    'media' => $media,
                    'facebook' => $facebook->latest()->approved()->get(),
                ]);

            }

        }
        return view('customer.pricing');
    
    }

    public function facebookDetails($slug){
        if(!Auth::user()->stripe_id == null){
        $user = Auth::user();
        $facebook = Facebook::where('slug',$slug)->first();

        $viewID = $facebook->id;

        $isView = $user->view_facebooks()->where('facebook_id',$viewID)->count();
        if($isView == 0){
            $user->view_facebooks()->attach($viewID);
        }
        return view('customer.facebookdetails',compact('facebook'));
    }
    return view('customer.pricing');
    }

    // Tiktok Ad 
    public function tiktokad(Request $request)
    {
        if(!Auth::user()->stripe_id == null){
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {
                $collections = DB::table('tiktoks')->select('collection')->distinct()->get()->pluck('collection')->sort();
                $countrys = DB::table('tiktoks')->select('country')->distinct()->get()->pluck('country')->sort();
                $platforms = DB::table('tiktoks')->select('platform')->distinct()->get()->pluck('platform')->sort();
                $buttonTypes = DB::table('tiktoks')->select('action')->distinct()->get()->pluck('action')->sort();
                $productTypes = DB::table('tiktoks')->select('opportunity')->distinct()->get()->pluck('opportunity')->sort();
                $saturations = DB::table('tiktoks')->select('saturation')->distinct()->get()->pluck('saturation')->sort();

                $tiktok = Tiktok::query();
                if($request->filled('searchtext')){
                    $tiktok->where('title','LIKE', "%$request->searchtext%")->get();
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

                return view('customer.tiktok', [
                    'collections' => $collections,
                    'countrys' => $countrys,
                    'platforms' => $platforms,
                    'buttonTypes' => $buttonTypes,
                    'productTypes' => $productTypes,
                    'saturations' => $saturations,
                    'tiktok' => $tiktok->latest()->approved()->get(),
                ]);
            }
        if(Auth::user()->subscription('main')->onGracePeriod() && !Auth::user()->subscription('main')->cancelled()){
            $collections = DB::table('tiktoks')->select('collection')->distinct()->get()->pluck('collection')->sort();
            $countrys = DB::table('tiktoks')->select('country')->distinct()->get()->pluck('country')->sort();
            $platforms = DB::table('tiktoks')->select('platform')->distinct()->get()->pluck('platform')->sort();
            $buttonTypes = DB::table('tiktoks')->select('action')->distinct()->get()->pluck('action')->sort();
            $productTypes = DB::table('tiktoks')->select('opportunity')->distinct()->get()->pluck('opportunity')->sort();
            $saturations = DB::table('tiktoks')->select('saturation')->distinct()->get()->pluck('saturation')->sort();

            $tiktok = Tiktok::query();
            if($request->filled('searchtext')){
                $tiktok->where('title','LIKE', "%$request->searchtext%")->get();
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

            return view('customer.tiktok', [
                'collections' => $collections,
                'countrys' => $countrys,
                'platforms' => $platforms,
                'buttonTypes' => $buttonTypes,
                'productTypes' => $productTypes,
                'saturations' => $saturations,
                'tiktok' => $tiktok->latest()->approved()->get(),
            ]);
        }
    }
    return view('customer.pricing');
    }

    public function tiktokDetails($slug){
        if(!Auth::user()->stripe_id == null){
        $user = Auth::user();
        $tiktok = Tiktok::where('slug',$slug)->first();

        $viewID = $tiktok->id;

        $isView = $user->view_tiktoks()->where('tiktok_id',$viewID)->count();
        if($isView == 0){
            $user->view_tiktoks()->attach($viewID);
        } else{
            $user->view_tiktoks()->detach($viewID);
        }
        return view('customer.tiktokdetails',compact('tiktok'));
    }
    return view('customer.pricing');
    }

    // Aliexpress
    public function aliexpress(Request $request){
        if(!Auth::user()->stripe_id == null){
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {
                $aliexpress = Aliexpress::latest()->approved()->paginate(20);
                if($request->ajax()){
                    $view = view('customer.view.aliView',compact('aliexpress'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('customer.aliexpress',compact('aliexpress'));
            }
            if(Auth::user()->subscription('main')->onGracePeriod() && !Auth::user()->subscription('main')->cancelled()){
                $aliexpress = Aliexpress::latest()->approved()->paginate(20);
                if($request->ajax()){
                    $view = view('customer.view.aliView',compact('aliexpress'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('customer.aliexpress',compact('aliexpress'));
            }
        }
        return view('customer.pricing');
    }

    // Amazon
    public function amazon(Request $request){
        if(!Auth::user()->stripe_id == null){
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {
                $amazon = Amazon::latest()->approved()->paginate(20);
                if($request->ajax()){
                    $view = view('customer.view.amazonView',compact('amazon'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('customer.amazon',compact('amazon'));
            }
            if(Auth::user()->subscription('main')->onGracePeriod() && !Auth::user()->subscription('main')->cancelled()){
                $amazon = Amazon::latest()->approved()->paginate(20);
                if($request->ajax()){
                    $view = view('customer.view.amazonView',compact('amazon'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('customer.amazon',compact('amazon'));
            }
        }
    return view('customer.pricing');
    }

    // Shopify
    public function shopify(Request $request){
        if(!Auth::user()->stripe_id == null){
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {
                $shopify = Shopify::latest()->approved()->paginate(10);
                if($request->ajax()){
                    $view = view('customer.view.shopifyView',compact('shopify'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('customer.shopify',compact('shopify'));
            }
            if(Auth::user()->subscription('main')->onGracePeriod() && !Auth::user()->subscription('main')->cancelled()){
                $shopify = Shopify::latest()->approved()->paginate(10);
                if($request->ajax()){
                    $view = view('customer.view.shopifyView',compact('shopify'))->render();
                    return response()->json(['html'=>$view]);
                }
                return view('customer.shopify',compact('shopify'));
            }
        }
    return view('customer.pricing');
    }
}
