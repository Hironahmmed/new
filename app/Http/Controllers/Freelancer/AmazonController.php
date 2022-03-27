<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\Controller;
use App\Models\Amazon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmazonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amazons = Auth::user()->amazons()->latest()->get();
        return view('freelancer.amazon.index',compact('amazons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freelancer.amazon.create');
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
            'review' => 'required',
            'rating' => 'required',
            'ali_image' => 'required',
            'ali_link' => 'required',
            'amazon_link' => 'required',
        ]);

        $amazon = new Amazon();
        $amazon->user_id = Auth::id();
        $amazon->title = $request->title;
        $amazon->price = $request->price;
        $amazon->review = $request->review;
        $amazon->rating = $request->rating;
        $amazon->ali_image = $request->ali_image;
        $amazon->ali_link = $request->ali_link;
        $amazon->amazon_link = $request->amazon_link;
        $amazon->is_approved = false;
        $amazon->save();

        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('freelancer.amazon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amazon  $amazon
     * @return \Illuminate\Http\Response
     */
    public function show(Amazon $amazon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amazon  $amazon
     * @return \Illuminate\Http\Response
     */
    public function edit(Amazon $amazon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amazon  $amazon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amazon $amazon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amazon  $amazon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amazon $amazon)
    {
        //
    }
}
