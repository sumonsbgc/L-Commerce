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
/* Route::group(["middleware" => "auth"], function () {
}); */


Route::group(["prefix" => "admin", "middleware" => "auth"], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // Route For Create Posts Form
    Route::get('/post', function () {
        return view('bend.pages.post-create');
    })->name('create_post');

    // Route For Posts Lists
    Route::get('/posts', function () {
        return view('bend.pages.posts');
    })->name('posts');

    // Route For Create Page Form
    Route::get('/page', function () {
        return view('bend.pages.page-create');
    })->name('create_page');

    // Route For Pages Lists
    Route::get('/pages', function () {
        return view('bend.pages.pages');
    })->name('pages');

    Route::get('/product', 'ProductController@create')->name('create_product');
    Route::get('/products', 'ProductController@index')->name('products');


    Route::get('/category', function () {
        return view('bend.pages.category-create');
    })->name('create_category');

    Route::get('/categories', function () {
        return view('bend.pages.categories');
    })->name('categories');

    // Route For Profile Page
    Route::get('/profile', 'ProfileController@index')->name('profile');

    // Route For Settings Page
    Route::get('/settings', function () {
        return view('bend.pages.settings');
    })->name('settings');
});

Route::get('/', 'HomeController@index')->name('home');
