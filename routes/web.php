<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// routes/auth.php so that auth.php file will be available in this web.php
require __DIR__.'/auth.php';


/*====================================================
                ## FrontEnd ##
=====================================================*/


/*====================================================
                ## backend ##
=====================================================*/
Route::get('admin',function(){
    return view('backend.pages.home');
});


Route::get('admin',function(){
    return view('backend.pages.home');
});

Route::get('siteSetting',function(){
    return view('backend.pages.master_setup.site_setting');
})->name('siteSetting');
