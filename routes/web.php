<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",function(){
    return redirect(route('login'));
});



Auth::routes();

    Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
    Route::post('/user_logout', [App\Http\Controllers\Auth\LoginController::class, 'user_logout'])->name('user_logout');
    // Candidates Routes On User
    Route::get('user',[App\Http\Controllers\User\CandidateController::class, 'index'])->name('user.candidate.index');
    Route::get('user/edit/{id}',[App\Http\Controllers\User\CandidateController::class, 'edit'])->name('user.candidate.edit');
    Route::get('user/show/{id}',[App\Http\Controllers\User\CandidateController::class, 'show'])->name('user.candidate.show');
    Route::post('user/save',[App\Http\Controllers\User\CandidateController::class, 'save'])->name('user.candidate.save');
    Route::get('user/delete/',[App\Http\Controllers\User\CandidateController::class, 'delete'])->name('user.candidate.delete');
    Route::put('user/update',[App\Http\Controllers\User\CandidateController::class, 'update'])->name('user.candidate.update');
    //

    // Candidates Content Page Routes On User
    Route::get('user/candidate/content/{id}',[App\Http\Controllers\User\CandidateController::class, 'content'])->name('user.content.index');
    Route::post('user/candidate/save',[App\Http\Controllers\User\CandidateController::class, 'consent_form'])->name('user.content.save');
    //

    // Reports Routes On User
    Route::get('user/reports/daily',[App\Http\Controllers\User\ReportController::class, 'daily_report'])->name('user.reports.daily');
    Route::get('user/reports/monthly',[App\Http\Controllers\User\ReportController::class, 'monthly_report'])->name('user.reports.monthly');
    Route::get('user/reports/yearly',[App\Http\Controllers\User\ReportController::class, 'yearly_report'])->name('user.reports.yearly');
    //
});


Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\Admin\AdminController::class, 'authenticate'])->name('admin.auth');

	});

	Route::group(['middleware' => 'admin.auth'], function(){
        Route::post('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');
		Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        // Users Routes On Admin
        Route::get('/user/index',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.user.index');
        Route::get('/user/add',[App\Http\Controllers\Admin\DashboardController::class, 'add'])->name('admin.user.add');
        Route::post('/user/save',[App\Http\Controllers\Admin\DashboardController::class, 'save'])->name('admin.user.save');
        Route::get('/user/edit/{id}',[App\Http\Controllers\Admin\DashboardController::class, 'edit'])->name('admin.user.edit');
        // Route::put('/user/update/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'update'])->name('admin.user.update');
        Route::post('/user/update', [App\Http\Controllers\Admin\DashboardController::class, 'update'])->name('admin.user.update');
        Route::get('/user/show/{id}',[App\Http\Controllers\Admin\DashboardController::class, 'show'])->name('admin.user.show');
        Route::get('/user/delete/',[App\Http\Controllers\Admin\DashboardController::class, 'delete'])->name('admin.user.delete');
        Route::get('/user/status-update/{id}',[App\Http\Controllers\Admin\DashboardController::class, 'status_update'])->name('admin.user.status-update');
        //
        // Candidate Routes On Admin
        Route::get('/candidate/index',[App\Http\Controllers\Admin\CandidateController::class, 'index'])->name('admin.candidate.index');
        Route::get('/candidate/show/{id}',[App\Http\Controllers\Admin\CandidateController::class, 'show'])->name('admin.candidate.show');
        Route::get('/candidate/delete/',[App\Http\Controllers\Admin\CandidateController::class, 'delete'])->name('admin.candidate.delete');
        //
    });
});

