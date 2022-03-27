<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index(Request $request){
        $subscribers = Subscriber::latest()->paginate(10);
        return view('admin.subscriber',compact('subscribers'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:subscribers'
         ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        Toastr::success('You are now our subscriber List','success');
        return redirect()->back();
    }

    public function destroy($subscriber){
        $subscriber = Subscriber::findOrFail($subscriber);
        $subscriber->delete();
        Toastr::success('Subscriber Deleted','success');
        return redirect()->back();
    }
}
