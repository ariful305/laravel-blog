<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
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
Route::get('/clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
});

Auth::routes();

//Website routes
Route::get('/',[WebsiteController::class,'home'])->name('index');

Route::get('/about',[WebsiteController::class,'about'])->name('about');

Route::get('/blog',[WebsiteController::class,'blog'])->name('blog');

Route::get('/post-details/{slug}',[WebsiteController::class,'post_details'] )->name('post-details');

Route::get('/tags/{slug}',[WebsiteController::class,'tags'])->name('tags');

Route::get('/categories/{slug}', [WebsiteController::class,'categories'])->name('categories');

Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');

Route::post('/contact', [WebsiteController::class,'contacts'])->name('contacts');

Route::get('/search', [WebsiteController::class,'search'])->name('search');



//Admin panel routes

    // Route::group(['prefix' => 'admin','middleware' =>['auth']],function(){

    //     Route::get('/dashboard', [HomeController::class,'index'])->name('dashboard');
    //     Route::get('/contacts',[HomeController::class,'contact'] )->name('admin.contacts');
    //     Route::get('/contacts/{id}',[HomeController::class,'show'] )->name('contacts.view');
    //     Route::delete('/contacts/{id}', [HomeController::class,'destroy'])->name('contacts.delete');

    //     Route::resource('/category',[HomeController::class]);
    //     Route::resource('/tag', [HomeController::class]);
    //     Route::resource('/post',[HomeController::class] );

    // });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/contacts', [HomeController::class, 'contact'])->name('admin.contacts');
    Route::get('/contacts/{id}', [HomeController::class, 'show'])->name('contacts.view');
    Route::delete('/contacts/{id}', [HomeController::class, 'destroy'])->name('contacts.delete');

    // Corrected resource routes
    Route::resource('/category', CategoryController::class);
    Route::resource('/tag', TagController::class);
    Route::resource('/post', PostController::class);

});


