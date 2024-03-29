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

Auth::routes(['verify' => true] );

//Social Login
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');
Route::post('/authenticate/{user}', 'SocialController@authenticate')->name('authenticate');

Route::get('sample_report', [App\Http\Controllers\ReportController::class,'sample_report'])->name('sample_report');

Route::get('/user_type', function () {
    return view('frontend.pages.user_type');
})->name('user_type');

Route::middleware(['auth','hasNotPaid','verified'])->group(function () {
    Route::resource('remote-assessment', RemoteAssessmentController::class);
    Route::post('/storeMedia', [App\Http\Controllers\RemoteAssessmentController::class, 'storeMedia'])->name('storeMedia');
    Route::get('/fileDestroy', [App\Http\Controllers\RemoteAssessmentController::class, 'fileDestroy'])->name('fileDestroy');
});

Route::middleware(['hasPaid','verified'])->group(function () {
    Route::resource('my_account', Account\DashboardController::class);
    Route::post('/my_password', [App\Http\Controllers\Account\DashboardController::class, 'myPassword'])->name('my_account.password');
    Route::get('/view_report', [App\Http\Controllers\Account\DashboardController::class, 'view_report'])->name('view_report');
    /* Route::post('/ground_proof', [App\Http\Controllers\Account\DashboardController::class, 'storeGroundProof'])->name('ground_proof.store'); */
    Route::post('/upgrade_plan', [App\Http\Controllers\Account\DashboardController::class, 'upgrade_plan'])->name('upgrade_plan');
});

Route::resource('contact', ContactController::class);

Route::group([
	'prefix' => 'backend',
    'as' => 'backend.',
	'middleware' => ['hasBackendAccess'],
],function(){
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class,'dashboard'])->name('dashboard');

    Route::resource('topic', App\Http\Controllers\Admin\TopicController::class);
    Route::get('/topic_status', [App\Http\Controllers\Admin\TopicController::class, 'updateStatus'])->name('topic.updateStatus');

    Route::resource('user', Backend\UserController::class);
    Route::get('/user_status', [App\Http\Controllers\Backend\UserController::class, 'updateStatus'])->name('user.updateStatus');

    Route::resource('remote-assessment-inquiries', Backend\RemoteAssessmentController::class);
    Route::post('/remote-assessment-update', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'updateRA'])->name('updateRA');
    Route::post('/remote-assessment-findings', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'remoteAssessmentFindings'])->name('remote-assessment-findings');
    Route::post('/remote-assessment-assign', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'remoteAssessmentAssign'])->name('remote-assessment.assign');
    
    Route::get('/remote_assessment_report/{file}', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'remote_assessment_report'])->name('remote_assessment_report');
    Route::get('/remote_assessment_status', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'remoteAssessmentStatus'])->name('remote_assessment_status');
    Route::get('/inquiry-details/{id}', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'show'])->name('inquiry-details');
    Route::get('/remote-assessment/download_report/{id}', [App\Http\Controllers\Backend\RemoteAssessmentController::class, 'downloadReport'])->name('remote_assessment.download');

    Route::resource('groundproof-inquiries', Backend\GroundProofController::class);
    Route::get('/ground-proof-survey/{id}', [App\Http\Controllers\Backend\GroundProofController::class, 'groundProofSurvey'])->name('ground-proof-survey');
    Route::post('/ground-proof-findings', [App\Http\Controllers\Backend\GroundProofController::class, 'groundProofFindings'])->name('ground-proof-findings');
    Route::post('/ground-proof-assign', [App\Http\Controllers\Backend\GroundProofController::class, 'groundProofAssign'])->name('ground-proof.assign');
    Route::get('/ground_proof_status', [App\Http\Controllers\Backend\GroundProofController::class, 'groundProofStatus'])->name('ground_proof_status');
    Route::get('/ground-proof-inquiry-details/{id}', [App\Http\Controllers\Backend\GroundProofController::class, 'show'])->name('ground-proof-inquiry-details');
    Route::get('/ground_proof/download_report/{id}', [App\Http\Controllers\Backend\GroundProofController::class, 'downloadReport'])->name('ground_proof.download');

    Route::resource('mitigation-inquiries', Backend\MitigationController::class);
    Route::get('/mitigation-survey/{id}', [App\Http\Controllers\Backend\MitigationController::class, 'mitigationSurvey'])->name('mitigation-survey');
    Route::post('/mitigation-findings', [App\Http\Controllers\Backend\MitigationController::class, 'mitigationFindings'])->name('mitigation-findings');
    Route::post('/mitigation-assign', [App\Http\Controllers\Backend\MitigationController::class, 'mitigationAssign'])->name('mitigation.assign');
    Route::get('/mitigation_status', [App\Http\Controllers\Backend\MitigationController::class, 'mitigationStatus'])->name('mitigation_status');

    Route::resource('contact', Backend\ContactController::class);
    Route::get('delete_contact/{id}', [App\Http\Controllers\Backend\ContactController::class,'delete_contact'])->name('contact.delete');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/survey_report/{id}', [App\Http\Controllers\ReportController::class, 'show'])->name('survey_report');
});

// Old routes

Route::get('/ensura', function () {
    return view('print.ensura');
})->name('ensura');

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

// Route::get('/dashboard', function () {
//     return view('backend.index');
// })->name('dashboard');

// Route::get('/initial-survey', function () {
//     return view('frontend.dashboard.initial-survey');
// })->name('initial-survey');

Route::get('/thanks', function () {
    return view('frontend.dashboard.thanks');
})->name('thanks');

/* Route::get('/my-account', function () {
    return view('frontend.dashboard.index');
})->name('my-account'); */



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

