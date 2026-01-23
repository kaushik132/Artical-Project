<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;




route::get('/', [HomeController::class, 'index']);
route::get('artical-detail/{slug?}', [HomeController::class, 'articalDetail'])->name('artical-detail');
route::get('post', [HomeController::class, 'Post']);
route::get('/travel-clips', [HomeController::class, 'videos']);


Route::post('/post-like', [HomeController::class, 'toggleLike'])->name('post.like');


Route::get('sitemap.xml',[SitemapController::class, 'index']);
