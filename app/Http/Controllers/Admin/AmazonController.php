<?php

namespace App\Http\Controllers\Admin;

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
        $amazons = Amazon::where('is_approved',true)->latest()->paginate(10);
        return view('admin.amazon.index',compact('amazons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.amazon.create');
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
        $amazon->is_approved = true;
        $amazon->save();

        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('admin.amazon.index');
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
        return view('admin.amazon.edit',compact('amazon'));
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
        $this->validate($request,[
            'title' => 'required',
            'price' => 'required',
            'review' => 'required',
            'rating' => 'required',
            'ali_image' => 'required',
            'ali_link' => 'required',
            'amazon_link' => 'required',
        ]);

        $amazon->user_id = Auth::id();
        $amazon->title = $request->title;
        $amazon->price = $request->price;
        $amazon->review = $request->review;
        $amazon->rating = $request->rating;
        $amazon->ali_image = $request->ali_image;
        $amazon->ali_link = $request->ali_link;
        $amazon->amazon_link = $request->amazon_link;
        $amazon->is_approved = true;
        $amazon->save();

        Toastr::success('Product Successfully Updated','Success');
        return redirect()->route('admin.amazon.index');
    }

    // show all pending post
    public function pendingAmazon(){
        $amazons = Amazon::where('is_approved',false)->paginate(10);
        return view('admin.amazon.pending',compact('amazons'));
    }


    // Amazon Approval
    public function approval($id){
        $amazon = Amazon::find($id);
        if($amazon->is_approved == false){
            $amazon->is_approved = true;
            $amazon->save();
            Toastr::success('Product Successfully Approved','Success');
            
        } else{
            Toastr::success('Product already approved','Success');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amazon  $amazon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amazon $amazon)
    {
        $amazon->delete();
        Toastr::success('Post Successfully deleted','Success');
        return redirect()->route('admin.amazon.index');
    }
}
