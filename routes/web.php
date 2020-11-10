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
    return view('frontend.pages.index');
})->name('/');

Route::get('/wildfire-assessment-services', function () {
    return view('frontend.pages.wildfire-assessment-services');
})->name('wildfire-assessment-services');

Route::get('/wildfire-protection-contractors', function () {
    return view('frontend.pages.wildfire-protection-contractors');
})->name('wildfire-protection-contractors');

Route::get('/wildfire-planning-information', function () {
    return view('frontend.pages.wildfire-planning-information');
})->name('wildfire-planning-information');

Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

Route::get('/blogs', function () {
    return view('frontend.pages.blogs');
})->name('blogs');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

