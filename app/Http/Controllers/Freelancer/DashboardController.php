<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $facebooks = Auth::user()->facebooks()->count();
        $tiktoks = Auth::user()->tiktoks()->count();
        $aliexpress = Auth::user()->aliexpresses()->count();
        $amazon = Auth::user()->amazons()->count();
        $shopify = Auth::user()->shopifies()->count();
        $totalProduct = $facebooks + $tiktoks + $aliexpress + $amazon + $shopify;
        return view('freelancer.dashboard',compact('facebooks','tiktoks','aliexpress','amazon','shopify','totalProduct'));
    }
}
