<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VisaApplicationController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

use App\Http\Controllers\OcrController;

Route::post('/ocr/upload', [OcrController::class, 'upload'])->name('ocr.upload');

use App\Http\Controllers\UserDashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::view('/visas', 'visas')->name('visas');
use App\Http\Controllers\TestimonialController;

Route::view('/pricing', 'pricing')->name('pricing');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::view('/about', 'about')->name('about');

Route::view('/careers', 'careers')->name('careers');
Route::view('/blog', 'blog')->name('blog');
Route::view('/newsroom', 'newsroom')->name('newsroom');
Route::view('/contact', 'contact')->name('contact');

Route::get('/visa/{country}', [VisaController::class, 'show'])->name('visa.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/visa/apply', [VisaApplicationController::class, 'create'])->name('visa.apply');
Route::post('/visa/apply', [VisaApplicationController::class, 'store'])->name('visa.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});