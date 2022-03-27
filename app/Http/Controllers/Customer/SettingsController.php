<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function index(){
        return view('customer.settings');
    }

    public function updateProfile(Request $request){
        $this->validate($request,[
            'name' => 'required',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $user = User::findOrFail(Auth::id());
        if (isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('profile')){
                Storage::disk('public')->makeDirectory('profile');
            }
            // Delete Old User Image
            if(!Storage::disk('public')->exists('profile/'.$user->image)){
                Storage::disk('public')->delete('profile/'.$user->image);
            }

            $profileImage = Image::make($image)->resize(200,200)->save(storage_path('app/public/profile').'/'.$imageName);
            // Storage::disk('public')->put('post/'.$imageName,$postImage );
        }else{
            $imageName = $user->image;
        }

        $user->name = $request->name;
        $user->image = $imageName;
        $user->about = $request->about;
        $user->save();
        Toastr::success('User Information Updated','Success');
        return redirect()->back();
        
    }

    public function updatePassword(Request $request){
        $this->validate($request,[
            'currentPassword' => 'required',
            'newPassword' => 'required'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->currentPassword,$hashedPassword)){
            if (!Hash::check($request->newPassword,$hashedPassword)){
                $user = User::findOrFail(Auth::id());
                $user->password = Hash::make($request->newPassword);
                $user->save();
                Toastr::success('Your Password Successfully Changes','suceess');
                Auth::logout();
                return redirect()->back();
            } else{
                Toastr::error('Old password and new password can not be same','error');
                return redirect()->back();
            }
        } else{
            Toastr::error('Old password not match','error');
            return redirect()->back();
        }
    }
}
