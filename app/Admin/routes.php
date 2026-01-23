<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('profiles', ProfileController::class);

    $router->resource('artical-categories', ArticalCategoryController::class);
    $router->resource('articals', ArticalController::class);


    $router->resource('post-categories', PostCategoryController::class);
    $router->resource('hashtags', HashtagController::class);
    $router->resource('posts', PostController::class);


    $router->resource('travel-clip-categories', TravelClipCategoryController::class);
    $router->resource('travel-clips', TravelClipController::class);


    $router->resource('seos', SeoController::class);

});
