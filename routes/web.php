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

Route::get('/landing-page', function () {
    return view('index');
})->name('landing-page');

Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/setting-notif', function () {
    return view('settingNotification');
})->name('settingNotif');

Route::get('/setting-reset', function () {
    return view('settingResetData');
})->name('settingResetData');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');