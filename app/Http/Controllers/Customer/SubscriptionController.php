<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        $paymentMethod = $request->payment_method;

        $planId = $request->plan;

        Auth()->user()->newSubscription('main', $planId)->withCoupon($request->coupon)->create($paymentMethod);

        return response([
            'success_url'=> redirect()->intended(route('customer.dashboard'))->getTargetUrl(),
            'message'=>'success'
        ]);
    }

    public function cancel()
    {
        Auth::user()->subscription('main')->cancel();

        Auth::logout();

        return redirect('/');


    }
}
