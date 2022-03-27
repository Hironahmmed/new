<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shopify;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopifies = Shopify::latest()->paginate(10);
        return view('admin.shopify.index',compact('shopifies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shopify.create');
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
            'shopify_link' => 'required',
            'shopify_traffic' => 'required',
            'shopify_all_link' => 'required',

            'image_one' => 'required',
            'title_one' => 'required',
            'shopify_one' => 'required',
            'ali_one' => 'required',

            'image_two' => 'required',
            'title_two' => 'required',
            'shopify_two' => 'required',
            'ali_two' => 'required',

            'image_three' => 'required',
            'title_three' => 'required',
            'shopify_three' => 'required',
            'ali_three' => 'required',

            'image_four' => 'required',
            'title_four' => 'required',
            'ali_four' => 'required',
            'shopify_four' => 'required',
        ]);

        $shopify = new Shopify();
        $shopify->user_id = Auth::id();
        $shopify->shopify_link = $request->shopify_link;
        $shopify->shopify_traffic = $request->shopify_traffic;
        $shopify->shopify_all_link = $request->shopify_all_link;
        $shopify->image_one = $request->image_one;
        $shopify->title_one = $request->title_one;
        $shopify->shopify_one = $request->shopify_one;
        $shopify->ali_one = $request->ali_one;
        $shopify->image_two = $request->image_two;
        $shopify->title_two = $request->title_two;
        $shopify->shopify_two = $request->shopify_two;
        $shopify->ali_two = $request->ali_two;
        $shopify->image_three = $request->image_three;
        $shopify->title_three = $request->title_three;
        $shopify->shopify_three = $request->shopify_three;
        $shopify->ali_three = $request->ali_three;
        $shopify->image_four = $request->image_four;
        $shopify->title_four = $request->title_four;
        $shopify->shopify_four = $request->shopify_four;
        $shopify->ali_four = $request->ali_four;

        $shopify->is_approved = true;
        $shopify->save();

        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('admin.shopify.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopify  $shopify
     * @return \Illuminate\Http\Response
     */
    public function show(Shopify $shopify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopify  $shopify
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopify $shopify)
    {
        return view('admin.shopify.edit',compact('shopify'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopify  $shopify
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopify $shopify)
    {
        $this->validate($request,[
            'shopify_link' => 'required',
            'shopify_traffic' => 'required',
            'shopify_all_link' => 'required',

            'image_one' => 'required',
            'title_one' => 'required',
            'shopify_one' => 'required',
            'ali_one' => 'required',

            'image_two' => 'required',
            'title_two' => 'required',
            'shopify_two' => 'required',
            'ali_two' => 'required',

            'image_three' => 'required',
            'title_three' => 'required',
            'shopify_three' => 'required',
            'ali_three' => 'required',

            'image_four' => 'required',
            'title_four' => 'required',
            'ali_four' => 'required',
            'shopify_four' => 'required',
        ]);

        $shopify->user_id = Auth::id();
        $shopify->shopify_link = $request->shopify_link;
        $shopify->shopify_traffic = $request->shopify_traffic;
        $shopify->shopify_all_link = $request->shopify_all_link;
        $shopify->image_one = $request->image_one;
        $shopify->title_one = $request->title_one;
        $shopify->shopify_one = $request->shopify_one;
        $shopify->ali_one = $request->ali_one;
        $shopify->image_two = $request->image_two;
        $shopify->title_two = $request->title_two;
        $shopify->shopify_two = $request->shopify_two;
        $shopify->ali_two = $request->ali_two;
        $shopify->image_three = $request->image_three;
        $shopify->title_three = $request->title_three;
        $shopify->shopify_three = $request->shopify_three;
        $shopify->ali_three = $request->ali_three;
        $shopify->image_four = $request->image_four;
        $shopify->title_four = $request->title_four;
        $shopify->shopify_four = $request->shopify_four;
        $shopify->ali_four = $request->ali_four;

        $shopify->is_approved = true;
        $shopify->save();

        Toastr::success('Product Successfully Updated','Success');
        return redirect()->route('admin.shopify.index');
    }

    // Shopify Approval
    public function approval($id){
        $shopify = Shopify::find($id);
        if($shopify->is_approved == false){
            $shopify->is_approved = true;
            $shopify->save();
            Toastr::success('Product Successfully Approved','Success');
            
        } else{
            Toastr::success('Product already approved','Success');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopify  $shopify
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopify $shopify)
    {
        $shopify->delete();
        Toastr::success('Post Successfully deleted','Success');
        return redirect()->route('admin.shopify.index');
    }
}
