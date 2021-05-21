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

//Setting section
Route::get('/setting', function () {
    return view('setting');
})->name('setting');

Route::get('/setting-notif', function () {
    return view('settingNotification');
})->name('settingNotif');

Route::get('/setting-reset', function () {
    return view('settingResetData');
})->name('settingResetData');


// assignment CRUD
Route::get('/assignment', function () {
    return view('assignment');
})->name('assignment');
Route::get('/assignment-create', function () {
    return view('assignmentCreate');
})->name('assignment-create');
Route::get('/assignment-detail', function () {
    return view('assignmentDetail');
})->name('assignment-detail');
Route::get('/assignment-edit', function () {
    return view('assignmentEdit');
})->name('assignment-edit');

// New Password Section
Route::get('/email-confirmation', function () {
    return view('confirmEmail');
})->name('confirmEmail');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');