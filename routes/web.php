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

//Social Login
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');
Route::post('/authenticate/{user}', 'SocialController@authenticate')->name('authenticate');


Route::get('/user_type', function () {
    return view('frontend.pages.user_type');
})->name('user_type');

Route::middleware(['auth'])->group(function () {
    Route::resource('remote-assessment', RemoteAssessmentController::class);
});


// Old routes


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
    return view('backend.index');
})->name('dashboard');

Route::get('/initial-survey', function () {
    return view('frontend.dashboard.initial-survey');
})->name('initial-survey');

Route::get('/thanks', function () {
    return view('frontend.dashboard.thanks');
})->name('thanks');

Route::get('/my-account', function () {
    return view('frontend.dashboard.index');
})->name('my-account');



Route::get('/remote-assessment-inquiries', function () {
    return view('backend.remote-assessment-inquiries.list');
})->name('remote-assessment-inquiries');

Route::get('/mitigation-inquiries', function () {
    return view('backend.mitigation-inquiries.list');
})->name('mitigation-inquiries');

Route::get('/mitigation-inquiries-ground-proof-survey', function () {
    return view('backend.mitigation-inquiries.ground-proof-survey');
})->name('mitigation-inquiries-ground-proof-survey');

Route::get('/remote-assessment-contracts', function () {
    return view('backend.remote-assessment-contracts.list');
})->name('remote-assessment-contracts');

Route::get('/mitigation-plan-contracts', function () {
    return view('backend.mitigation-plan-contracts.list');
})->name('mitigation-plan-contracts');

Route::get('/inquiry-details', function () {
    return view('backend.remote-assessment-contracts.show');
})->name('inquiry-details');

Route::get('/users', function () {
    return view('backend.user.list');
})->name('users');

Route::get('/companies', function () {
    return view('backend.companies.list');
})->name('companies');

Route::get('/contractors', function () {
    return view('backend.contractors.list');
})->name('contractors');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

