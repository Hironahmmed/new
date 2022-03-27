<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class FavoriteController extends Controller
{
    public function addFacebook($loadad){
        $user = Auth::user();
        $isFavorite = $user->favorite_facebooks()->where('facebook_id', $loadad)->count();

        if($isFavorite == 0){
            $user->favorite_facebooks()->attach($loadad);
            Toastr::success('Added to favorite list!','success');
            return redirect()->back();
        } else{
            $user->favorite_facebooks()->detach($loadad);
            Toastr::success('Remove from favorite list!','success');
            return redirect()->back();
        }
    }

    public function addTiktok($tiktok){
        $user = Auth::user();
        $isTiktokFavorite = $user->favorite_tiktoks()->where('tiktok_id', $tiktok)->count();

        if($isTiktokFavorite == 0){
            $user->favorite_tiktoks()->attach($tiktok);
            Toastr::success('Added to favorite list!','success');
            return redirect()->back();
        } else{
            $user->favorite_tiktoks()->detach($tiktok);
            Toastr::success('Remove from favorite list!','success');
            return redirect()->back();
        }
    }

    public function facebook(){
        $facebook = Auth::user()->favorite_facebooks;
        return view('customer.fabFacebook',compact('facebook'));
    }

    public function tiktok(){
        $tiktok = Auth::user()->favorite_tiktoks;
        return view('customer.fabtiktok',compact('tiktok'));
    }
}
