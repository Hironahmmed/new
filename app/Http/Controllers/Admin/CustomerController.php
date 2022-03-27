<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id',3)->latest()->paginate(10);
        return view('admin.customer.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'image' => 'required|image',
        ]);
        $image = $request->file('image');
        $username = str_slug($request->name);
        if (isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $username.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $profileImage = Image::make($image)->resize(200,200)->save(storage_path('app/public/profile').'/'.$imageName);
        }else{
            $imageName = 'default-user.png';
        }

        $user = new User();
        $user->name = $request->name;
        $user->username = $username;
        $user->email = $request->email;
        $user->image = $imageName;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;
        $user->about = $request->about;
        $user->save();
        Toastr::success('User Successfully Created:','Success');
        return redirect()->route('admin.customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = User::find($id);
        $diff=Carbon::now()->diffInDays($customer->trial_ends_at);
        return view('admin.customer.profile',compact('customer','diff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.customer.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Toastr::success('User Successfully Created:','Success');
        return redirect()->route('admin.customer.index');
    }

    // Approve User
    public function UpdateStatus($user_id, $status){
        try {
            $update_customer = User::whereId($user_id)->update([
                'status' => $status
            ]);
            if($update_customer){
                return redirect()->back();
            }
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
