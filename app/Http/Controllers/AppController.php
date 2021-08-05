<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Teacher;
use App\Models\WhyUs;

class AppController extends Controller
{
    //return the default home page here
    public function index(){
        $settings = Setting::first();
        $whyus = WhyUs::get();
        $posts = Post::take(7)->get();
        $teachers = Teacher::take(8)->get();

        return view('index')
                    ->with('settings', $settings)
                    ->with('whyus', $whyus)
                    ->with('posts', $posts)
                    ->with('teachers', $teachers);
    }


    //return the About us page
    public function about(){
        $settings = Setting::first();

        return view('pages.about')
                    ->with('settings', $settings);
        
    }


    //return the why us page
    public function whyus(){
        $whyus = WhyUs::get();

        return view('pages.why-us')
                    ->with('whyus', $whyus);
    }


    //return the posts page
    public function posts(){
        $posts = Post::paginate(5);

        return view('pages.posts')
                    ->with('posts', $posts);
    }

}
