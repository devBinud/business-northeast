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
    return view('public.home');
});
Route::get('about-us', function () {
    return view('public.about-us');
});
Route::get('assam', function () {
    return view('public.assam');
});
Route::get('contact', function () {
    return view('public.contact');
});
