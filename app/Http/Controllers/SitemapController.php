<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;


class SitemapController extends Controller
{
    public function index(){
$articalsitemap = Artical::all();


        return response()->view('sitemap',['articalsitemap'=> $articalsitemap ])->header('Content-Type','text/xml');
    }
}
