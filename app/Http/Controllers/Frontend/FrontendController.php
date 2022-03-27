<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Facebook;
use App\Models\Post;
use App\Models\Privacy;
use App\Models\Term;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $facebook = Facebook::latest()->approved()->paginate(10);
        $users = User::where('role_id',3)->count();
        return view('frontend.home',compact('users','facebook'));
    }

    public function blog(){
        $users = User::where('role_id',3)->count();
        $categories = Category::all();
        $features = Post::latest()->approved()->feature()->paginate(1);
        $popular = Post::latest()->approved()->popular()->paginate(5);
        $posts = Post::latest()->approved()->paginate(8);
        return view('frontend.blog',compact('users','posts','features','popular'));
    }

    public function details($slug){
        $users = User::where('role_id',3)->count();
        $post = Post::where('slug',$slug)->first();
        return view('frontend/single',compact('post','users'));
    }

    public function faq(){
        $users = User::where('role_id',3)->count();
        return view('frontend.faq',compact('users'));
    }

    public function about(){
        $users = User::where('role_id',3)->count();
        return view('frontend.about',compact('users'));
    }

    public function member(){
        $users = User::where('role_id',3)->count();
        return view('frontend.member',compact('users'));
    }

    public function privacy(){
        $privacies = Privacy::latest()->get();
        $users = User::where('role_id',3)->count();
        return view('frontend.privacy',compact('users','privacies'));
    }

    public function terms(){
        $terms = Term::latest()->get();
        $users = User::where('role_id',3)->count();
        return view('frontend.terms',compact('users','terms'));
    }

    public function affiliate(){
        $users = User::where('role_id',3)->count();
        return view('frontend.affiliate',compact('users'));
    }

    public function contact(){
        $users = User::where('role_id',3)->count();
        return view('frontend.contact',compact('users'));
    }

}
