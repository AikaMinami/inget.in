<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::resource('user', UserController::class);
Route::resource('schedule', ScheduleController::class);
Route::resource('assignment', AssignmentController::class);
Route::prefix('settings')->group(function() {
    Route::redirect('/', '/settings/account')->name('settings');
    Route::get('/account', [SettingController::class, 'account'])->name('account');    
    Route::get('/notification', [SettingController::class, 'notification'])->name('notification');
    Route::put('/notification/{id}', [NotificationController::class, 'update'])->name('notification.update');
    Route::get('/reset-data', [SettingController::class, 'resetData'])->name('reset_data');
});

// New Password Section
Route::get('/email-confirmation', function () {
    return view('confirmEmail');
})->name('confirmEmail');
Route::get('/new-password', function () {
    return view('newPassword');
})->name('newPassword');