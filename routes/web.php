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

Auth::routes();


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

Route::get('/dashboard', function () {
    return view('frontend.pages.dashboard');
})->name('dashboard');

Route::get('/initial-survey', function () {
    return view('frontend.dashboard.initial-survey');
})->name('initial-survey');

Route::get('/my-account', function () {
    return view('frontend.dashboard.index');
})->name('my-account');

Route::get('/inquiry', function () {
    return view('backend.inquiries.list');
})->name('inquiry');

Route::get('/inquiry-details', function () {
    return view('backend.inquiries.show');
})->name('inquiry-details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
