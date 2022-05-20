<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\Aliexpress;
use App\Models\Amazon;
use App\Models\Facebook;
use App\Models\Shopify;
use App\Models\Tiktok;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index(){
        // dd(Auth::user()->subscription('main')->onTrial());
        if (!Auth::user()->stripe_id == null) {
            # code....
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {
                $facebook = Auth::user()->view_facebooks()->count();
                $tiktok = Auth::user()->view_tiktoks()->count();
                $totalView = $facebook + $tiktok;
                $totalFacebookAd = Facebook::count() + 4000;
                $totalTiktokAd = Tiktok::count() + 3000;
                $aliexpress = Aliexpress::count() + 1500;
                $amazon = Amazon::count() + 1500;
                $shopify = Shopify::count() + 100;
                $totalProduct = $totalFacebookAd + $totalTiktokAd + $aliexpress + $amazon + $shopify;
                return view('customer.dashboard',compact('facebook','tiktok','totalView','totalFacebookAd','totalTiktokAd','aliexpress','amazon','totalProduct'));
            }
            if(Auth::user()->subscription('main')->onGracePeriod()){
                $facebook = Auth::user()->view_facebooks()->count();
                $tiktok = Auth::user()->view_tiktoks()->count();
                $totalView = $facebook + $tiktok;
                $totalFacebookAd = Facebook::count() + 4000;
                $totalTiktokAd = Tiktok::count() + 3000;
                $aliexpress = Aliexpress::count() + 1500;
                $amazon = Amazon::count() + 1500;
                $shopify = Shopify::count() + 100;
                $totalProduct = $totalFacebookAd + $totalTiktokAd + $aliexpress + $amazon + $shopify;
                return view('customer.dashboard',compact('facebook','tiktok','totalView','totalFacebookAd','totalTiktokAd','aliexpress','amazon','totalProduct'));
            } 
        }
            return view('customer.pricing');
    }

    public function profile(){
        return view('customer.profile');
    }

    public function faq(){
        return view('customer.faq');
    }

    public function contact(){
        
        return view('customer.contact');
    }

    public function email(Request $request){
        $details = [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        
        Mail::to('support@ebutify.com')->send(new ContactEmail($details));
        return back()->with('message_sent','Your message has been sent successfully!');
    }

    public function emails(Request $request)
    { 
        $details = [
            'subject' => 'Guest Message',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];
        
        Mail::to('support@ebutify.com')->send(new ContactEmail($details));

        return back()->with('message_sent','Your message has been sent successfully!');
    }

    public function tutorial(){
        return view('customer.tutorial');
    }

    public function checkout(){
        if(!Auth::user()->stripe_id == null){
            if (Auth::user()->subscription('main')->onTrial() && !Auth::user()->subscription('main')->cancelled()) {
                return redirect()->route('customer.dashboard');
            }
            if(Auth::user()->subscription('main')->onGracePeriod()){
                return redirect()->route('customer.dashboard');
            }

        }
        $data = Plan::all();
        
        return view('customer.checkout',compact('data'));
    }
    

    
}
