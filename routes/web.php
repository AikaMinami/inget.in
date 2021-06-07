<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ScheduleController;

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

Route::get('/landing-page', function () {
    return view('index');
})->name('landing-page');

Route::get('/', [PageController::class, 'home'])->name('home')->middleware('auth');
Route::get('/home', [PageController::class, 'home'])->middleware('auth');
Route::resource('user', UserController::class);
Route::resource('schedule', ScheduleController::class);
Route::resource('assignment', AssignmentController::class);
Route::prefix('settings')->group(function() {
    Route::redirect('/', '/settings/account')->name('settings');
    Route::get('/account', [PageController::class, 'settingAccount'])->name('account')->middleware('auth');    
    Route::get('/notification', [PageController::class, 'settingNotification'])->name('notification')->middleware('auth');
    Route::put('/notification/{id}', [NotificationController::class, 'update'])->name('notification.update');
    Route::get('/reset-data', [PageController::class, 'settingResetData'])->name('reset_data')->middleware('auth');
    Route::delete('/reset-assignment/{id}', [AssignmentController::class, 'reset_assignment'])->name('reset_assignment');
    Route::delete('/reset-schedule/{id}', [ScheduleController::class, 'reset_schedule'])->name('reset_schedule');
});

// New Password Section
Route::get('/email-confirmation', [PageController::class, 'emailConfirmation'])->name('email_confirmation');
Route::get('/check_email', [PageController::class, 'getAccountForResetPassword'])->name('check_email');
Route::get('/new-password/{id}', [PageController::class, 'resetPassword'])->name('new_password');
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/assignment?sortBy=level', [AssignmentController::class, 'sortByLevel'])->name('assignment.level');