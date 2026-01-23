<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ArticalCategory;
use App\Models\Artical;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Hashtag;
use App\Models\TravelClipCategory;
use App\Models\TravelClip;



class HomeController extends Controller
{
    public function __construct()
    {
        $profile = Profile::first();
        $countArtical = Artical::where('is_active', 1)->count();
        $countPost = Post::where('is_active', 1)->count();

        view()->share('profile', $profile);
        view()->share('countArtical', $countArtical);
        view()->share('countPost', $countPost);
    }


    public function index()
    {

        $articalcategories = ArticalCategory::all();
        $artical = Artical::with('articalcategory')
            ->where('is_active', 1)
            ->get();

        $randomArtical = Artical::where('is_active', 1)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $resentArtical = Artical::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('index', compact('articalcategories', 'artical', 'randomArtical', 'resentArtical'));
    }



    public function articalDetail($slug = null)
    {
       $articalcategories = Artical::take(10)->get();
       $artical = Artical::with('articalcategory')
           ->where('slug', $slug)
           ->where('is_active', 1)
           ->first();
        return view('artical-detail',compact('articalcategories', 'artical'));
    }

    public function Post()
    {
        $articals = Artical::where('is_active', 1)->inRandomOrder()->take(10)->get();
        $postcategories = PostCategory::all();
        $posthashtags = Hashtag::all();
        $post = Post::with('postcategory')
            ->where('is_active', 1)
            ->get();

        return view('post', compact('postcategories', 'post', 'posthashtags', 'articals'));


    }

    public function videos()
    {
        $travelclipcategories = TravelClipCategory::where('is_active', 1)->get();
        $travelclips = TravelClip::with('travelclipcategory')->where('is_active', 1)->get();
        return view('video',compact('travelclipcategories','travelclips'));
    }
}
