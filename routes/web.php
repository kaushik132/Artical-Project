<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




route::get('/', [HomeController::class, 'index']);
route::get('artical-detail/{slug?}', [HomeController::class, 'articalDetail'])->name('artical-detail');
route::get('post', [HomeController::class, 'Post']);
route::get('/travel-clips', [HomeController::class, 'videos']);



