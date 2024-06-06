<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\TourController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReviewController;
use App\Models\About;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

// frontend controller 
Route::get('/', [FrontendController::class, 'main'])->name('index');
Route::get('tour', [FrontendController::class, 'tour'])->name('tour');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('tour/{tour}', [FrontendController::class, 'singleTour'])->name('singleTour');
//login qismi 
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['checkAdmin:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('about', AboutController::class);
        Route::resource('news', NewsController::class);
        Route::resource('tour', TourController::class);
        Route::resource('review', ReviewController::class);
        Route::resource('faq', FaqController::class);
        //Route::resource('booking', );
    });
});

Route::get('/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
})->where('lang', 'en|ru|uz');

