<?php

namespace App\Http\Controllers\Admin;

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
        $aliexpresses = Aliexpress::latest()->paginate(10);
        return view('admin.aliexpress.index',compact('aliexpresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aliexpress.create');
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
        $aliexpress->is_approved = true;
        $aliexpress->save();

        Toastr::success('Product Successfully Saved','Success');
        return redirect()->route('admin.aliexpress.index');
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
        return view('admin.aliexpress.edit',compact('aliexpress'));
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
        $this->validate($request,[
            'title' => 'required',
            'price' => 'required',
            'order' => 'required',
            'rating' => 'required',
            'ali_image' => 'required',
            'ali_link' => 'required',
        ]);

        $aliexpress->user_id = Auth::id();
        $aliexpress->title = $request->title;
        $aliexpress->price = $request->price;
        $aliexpress->order = $request->order;
        $aliexpress->rating = $request->rating;
        $aliexpress->ali_image = $request->ali_image;
        $aliexpress->ali_link = $request->ali_link;
        $aliexpress->is_approved = true;
        $aliexpress->save();

        Toastr::success('Product Successfully Updated','Success');
        return redirect()->route('admin.aliexpress.index');
    }

    // show all pending post
    public function pendingAliexpress(){
        $aliexpresses = Aliexpress::where('is_approved',false)->paginate(10);
        return view('admin.aliexpress.pending',compact('aliexpresses'));
    }


    // Aliexpress Approval
    public function approval($id){
        $aliexpress = Aliexpress::find($id);
        if($aliexpress->is_approved == false){
            $aliexpress->is_approved = true;
            $aliexpress->save();
            Toastr::success('Product Successfully Approved','Success');
            
        } else{
            Toastr::success('Product already approved','Success');
        }
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aliexpress  $aliexpress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aliexpress $aliexpress)
    {
        $aliexpress->delete();

        Toastr::success('Post Successfully deleted','Success');
        return redirect()->route('admin.aliexpress.index');
    }
}
