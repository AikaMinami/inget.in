<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;

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

Route::get('/landing-page', function () {
    return view('index');
})->name('landing-page');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::prefix('settings')->group(function() {
    Route::redirect('/', '/settings/account')->name('settings');
    Route::get('/account', [SettingController::class, 'account'])->name('account');    
    Route::get('/notification', [SettingController::class, 'notification'])->name('notification');
    Route::get('/reset-data', [SettingController::class, 'resetData'])->name('reset_data');
});


Route::resource('user', UserController::class);
Route::resource('notification', NotificationController::class);