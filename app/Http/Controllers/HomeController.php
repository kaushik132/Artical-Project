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
use App\Models\PostLike;
use App\Models\Seo;



class HomeController extends Controller
{
    public function __construct()
    {
        $profile = Profile::first();
        $countArtical = Artical::where('is_active', 1)->count();
        $countPost = Post::where('is_active', 1)->count();
        $countTravelClip = TravelClip::where('is_active', 1)->count();

        $fillterArtical = ArticalCategory::where('is_active', 1)->get();
        $fillterPost = PostCategory::where('is_active', 1)->get();
        $fillterTravelClip = TravelClipCategory::where('is_active', 1)->get();





        view()->share('profile', $profile);
        view()->share('countArtical', $countArtical);
        view()->share('countPost', $countPost);
        view()->share('countTravelClip', $countTravelClip);


        view()->share('fillterArtical', $fillterArtical);
        view()->share('fillterPost', $fillterPost);
        view()->share('fillterTravelClip', $fillterTravelClip);
    }


    public function index(Request $request)
    {
        $homepage = Seo::first();
        $seo_data['seo_title'] = $homepage->seo_title_article;
        $seo_data['seo_description'] = $homepage->seo_des_article;
        $seo_data['keywords'] = $homepage->seo_key_article;
        $seo_data['seo_image'] = $homepage->seo_image_article;
        $canocial = 'https://asd.org';

        $articalcategories = ArticalCategory::where('is_active', 1)->get();
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


        $query = Artical::with('articalcategory')->where('is_active', 1);

        if ($request->filled('article_category')) {
            $query->whereHas('articalcategory', function ($q) use ($request) {
                $q->where('slug', $request->article_category);
            });
        }

        $articals = $query->get();

        return view('index', compact('articalcategories', 'artical', 'randomArtical', 'resentArtical', 'articals', 'seo_data', 'canocial'));
    }



    public function articalDetail($slug = null)
    {
        $articalcategories = Artical::take(10)->get();
        $artical = Artical::with('articalcategory')
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->first();

        $seo_data['seo_title'] = $artical->seo_title;
        $seo_data['seo_description'] = $artical->seo_des;
        $seo_data['keywords'] = $artical->seo_key;
        $seo_data['seo_image'] = $artical->image;
        $canocial = 'https://asd.org/artical-detail/' . $slug;
        return view('artical-detail', compact('articalcategories', 'artical', 'seo_data', 'canocial'));
    }

    public function Post(Request $request)
    {

        $homepage = Seo::first();
        $seo_data['seo_title'] = $homepage->seo_title_post;
        $seo_data['seo_description'] = $homepage->seo_des_post;
        $seo_data['keywords'] = $homepage->seo_key_post;
        $seo_data['seo_image'] = $homepage->seo_image_post;
        $canocial = 'https://asd.org/post';

        $articals = Artical::where('is_active', 1)->inRandomOrder()->take(10)->get();
        $postcategories = PostCategory::all();
        $posthashtags = Hashtag::all();
        $post = Post::with(['postcategory', 'postLikes'])
            ->where('is_active', 1)
            ->get();



        $query = Post::with('postcategory')->where('is_active', 1);

        if ($request->filled('category')) {
            $query->whereHas('postcategory', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $posts = $query->get();

        return view('post', compact('postcategories', 'post', 'posthashtags', 'articals', 'posts', 'seo_data', 'canocial'));
    }

    public function videos(Request $request)
    {
        $homepage = Seo::first();
        $seo_data['seo_title'] = $homepage->seo_title_travel_clip;
        $seo_data['seo_description'] = $homepage->seo_des_travel_clip;
        $seo_data['keywords'] = $homepage->seo_key_travel_clip;
        $seo_data['seo_image'] = $homepage->seo_image_travel_clip;
        $canocial = 'https://asd.org/travel-clips';

        $articals = Artical::where('is_active', 1)->inRandomOrder()->take(10)->get();
        $travelclipcategories = TravelClipCategory::where('is_active', 1)->get();
        $travelclips = TravelClip::with('travelclipcategory')->where('is_active', 1)->get();


        $query = TravelClip::with('travelclipcategory')->where('is_active', 1);

        if ($request->filled('category')) {
            $query->whereHas('travelclipcategory', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $clips = $query->get();

        return view('video', compact('travelclipcategories', 'travelclips', 'articals', 'clips', 'seo_data', 'canocial'));
    }



    public function toggleLike(Request $request)
    {
        $ip = $request->ip();

        $post = Post::findOrFail($request->post_id);

        $like = PostLike::where('post_id', $post->id)
            ->where('ip_address', $ip)
            ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            PostLike::create([
                'post_id' => $post->id,
                'ip_address' => $ip
            ]);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked,
            'count' => PostLike::where('post_id', $post->id)->count()
        ]);
    }
}
