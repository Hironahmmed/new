<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use App\Models\Aliexpress;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AliexpressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliexpresses = Auth::user()->aliexpresses()->latest()->get();
        return view('freelancer.aliexpress.index',compact('aliexpresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freelancer.aliexpress.create');
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
            'title' => 'required',
            'price' => 'required',
            'order' => 'required',
            'rating' => 'required',
            'ali_image' => 'required',
            'ali_link' => 'required',
        ]);

        $aliexpress = new Aliexpress();
        $aliexpress->user_id = Auth::id();
        $aliexpress->title = $request->title;
        $aliexpress->price = $request->price;
        $aliexpress->order = $request->order;
        $aliexpress->rating = $request->rating;
        $aliexpress->ali_image = $request->ali_image;
        $aliexpress->ali_link = $request->ali_link;
        $aliexpress->is_approved = false;
        $aliexpress->save();

        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('freelancer.aliexpress.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aliexpress  $aliexpress
     * @return \Illuminate\Http\Response
     */
    public function show(Aliexpress $aliexpress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aliexpress  $aliexpress
     * @return \Illuminate\Http\Response
     */
    public function edit(Aliexpress $aliexpress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aliexpress  $aliexpress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aliexpress $aliexpress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aliexpress  $aliexpress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aliexpress $aliexpress)
    {
        //
    }
}
