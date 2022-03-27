<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privacies = Privacy::latest()->get();
        return view('admin.privacy.index',compact('privacies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.privacy.create');
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
            'body' => 'required',
        ]);

        $privacy = new Privacy();
        $privacy->body = $request->body;
        $privacy->save();

        Toastr::success('Post Successfully Saved','Success');
        return redirect()->route('admin.privacy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(Privacy $privacy)
    {
        return view('admin.privacy.show',compact('privacy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit(Privacy $privacy)
    {
        return view('admin.privacy.edit',compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Privacy $privacy)
    {
        $this->validate($request,[
            'body' => 'required',
        ]);
        

        $privacy->body = $request->body;
        $privacy->save();
        Toastr::success('Post Successfully Updated','Success');
        return redirect()->route('admin.privacy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privacy $privacy)
    {
        $privacy->delete();

        Toastr::success('Post Successfully deleted','Success');
        return redirect()->route('admin.privacy.index');
    }
}
