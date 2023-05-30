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
Route::get('national', function () {
    return view('public.national');
});
Route::get('international', function () {
    return view('public.international');
});
Route::get('videos', function () {
    return view('public.videos');
});
Route::get('business-conversation', function () {
    return view('public.business-conversation');
});
Route::get('articles', function () {
    return view('public.articles');
});
Route::get('subscribe-now', function () {
    return view('public.subscribe-now');
});
// Top header pages
Route::get('about', function () {
    return view('public.about');
});
Route::get('report-news', function () {
    return view('public.report-news');
});
Route::get('advertise', function () {
    return view('public.advertise');
});
Route::get('privacy', function () {
    return view('public.privacy');
});
Route::get('contact', function () {
    return view('public.contact');
});
// footer-bottom pages
Route::get('privacy-policy-footer', function () {
    return view('public.privacy-policy-footer');
});
Route::get('terms-and-condition', function () {
    return view('public.terms-and-condition');
});
Route::get('cancellation-refund', function () {
    return view('public.cancellation-refund');
});
Route::get('payment-policy', function () {
    return view('public.payment-policy');
});

