<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ArticalCategory;

class HomeController extends Controller
{
     public function __construct()
    {
        $profile = Profile::first();
        view()->share('profile', $profile);
    }


    public function index()
    {
        $articalcategories = ArticalCategory::all();

        return view('index',compact('articalcategories'));
    }



    public function articalDetail()
    {
        return view('artical-detail');
    }

    public function Post()
    {
        return view('post');
    }

    public function videos()
    {
        return view('video');
    }
}
