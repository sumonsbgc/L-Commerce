<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);

Route::group(["prefix" => "admin", "middleware" => "auth"], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    // Route For Create Posts Form
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/store', 'PostController@store')->name('post.store');

    // Route For Posts Lists
    Route::get('/posts', function () {
        return view('bend.pages.posts');
    })->name('posts.list');

    // Route For Create Page Form
    Route::get('/page', function () {
        return view('bend.pages.page-create');
    })->name('page.create');

    // Route For Pages Lists
    Route::get('/pages', function () {
        return view('bend.pages.pages');
    })->name('pages.list');

    Route::get('/product', 'ProductController@create')->name('product.create');
    Route::get('/products', 'ProductController@index')->name('products.list');


    Route::get('/category', function () {
        return view('bend.pages.category-create');
    })->name('category.create');

    Route::get('/categories', function () {
        return view('bend.pages.categories');
    })->name('categories.list');

    // Route For Profile Page
    Route::get('/profile', 'ProfileController@index')->name('profile');

    // Route For Settings Page
    Route::get('/settings', function () {
        return view('bend.pages.settings');
    })->name('settings');
});


Route::group([], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

// Route::get('/', 'HomeController@index')->name('home');
