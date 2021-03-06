<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProjectController;
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

Route::get('index', [BugController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/register/facebook', [RegisterController::class, 'facebook'])->middleware('guest');
Route::post('/register/facebook/redirect', [RegisterController::class, 'facebookRedirect'])->middleware('guest');



Route::get('/allprojects', [ProjectController::class, 'projects']);
Route::post('addproject', [ProjectController::class, 'store']);



// Route::post('redirectToProfile', [UserController::class, 'redirectToProfile']);
Route::post('/profile', [UserController::class, 'profile']);

Route::post('/uploadavatar', [UserController::class, 'uploadAvatar']);



Route::post('/logout', [SessionController::class, 'destroy']);



Route::get('/layout', function () {
    return view('components.layout');
});
Route::get('/slide', function () {
    return view('components.slide-menu');
});


Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');



Route::get('/test', function () {
    return view('test');
});



Route::get('/login/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('/login/facebook/redirect', [SocialController::class, 'handleFacebookProviderCallback']);


Route::get('/login/google', [SocialController::class, 'googleRedirect']);
Route::get('/login/google/redirect', [SocialController::class, 'handleGoogleProviderCallback']);


Route::get('/login/identify', [PasswordController::class, 'createIdentify']);
Route::post('/login/identify', [PasswordController::class, 'identifyUser']);

Route::post('/recover/code', [PasswordController::class, 'createRecoverPassword']);
// Route::post('/recover/code', [PasswordController::class, 'storeRecoverPassword']);
