<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aliexpress;
use App\Models\Amazon;
use App\Models\Facebook;
use App\Models\Shopify;
use App\Models\Tiktok;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $users = User::where('role_id',3)->get();
        $facebooks = Facebook::count();
        $tiktoks = Tiktok::count();
        $aliexpress = Aliexpress::count();
        $amazon = Amazon::count();
        $shopify = Shopify::count();
        $totalProduct = $facebooks + $tiktoks + $aliexpress + $amazon + $shopify;

        $active = 0;
        foreach($users as $user){
        if($user->subscribed('main') && !$user->subscription('main')->cancelled())
        {
        $active += 1;
        }
        }

        $total_income = 0;
        foreach($users as $user){
        
            foreach($user->invoices() as $invoice)
            {
                $total_income =+ $invoice->amount_paid;
            }

        }

        $this_month_income = 0;
        foreach($users as $user){
        
            foreach($user->invoices() as $invoice)
            {
                if( Carbon::parse($invoice->created)->format('m') == Carbon::now()->format('m') )
                {
                    $this_month_income =+ $invoice->amount_paid;
                }
            }

        }

        $this_last_income = 0;
        foreach($users as $user){
        
            foreach($user->invoices() as $invoice)
            {
                if( Carbon::parse($invoice->created)->format('m') == Carbon::now()->subMonth()->format('m') )
                {
                    $this_last_income =+ $invoice->amount_paid;
                }
            }

        }

        $two_month_income = 0;
        foreach($users as $user){
        
            foreach($user->invoices() as $invoice)
            {
                if( Carbon::parse($invoice->created)->format('m') == Carbon::now()->subMonth()->format('m') || Carbon::parse($invoice->created)->format('m') == Carbon::now()->subMonth()->format('m') )
                {
                    $two_month_income =+ $invoice->amount_paid;
                }
            }

        }

        return view('admin.dashboard',compact('facebooks','tiktoks','aliexpress','amazon','shopify','totalProduct','users','active','total_income','this_month_income','this_last_income','two_month_income'));
    }
}
