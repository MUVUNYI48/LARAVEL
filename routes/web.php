<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\upcoming;
use App\Models\Payment;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/movie', function () {
    return view('movie');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking',['name' => 'muvunyi']);
});

Route::get('/location', function () {
    return view('location');
});
Route::get('/payment', function () {
    return view('payment');
});

Route::post('/chooseLocation',[LocationController::class,'chooseLocation']);
Route::get('/popular', [MovieController::class, 'fetchPopularMovies']);
Route::get('/test', [MovieController::class, 'fetchPopularMovies']);
// Route::get('/upcoming', [MovieController::class, 'upcoming']);
Route::get('/upcoming', [upcoming::class, 'index']);
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.showForm');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submitForm');


Route::post('/proccess-payment', [PaymentController::class, 'store'])->name('payment');

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/movies', [MovieController::class, 'index']);

Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/logout',[AuthController::class,'logout'])->name('auth.logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');// routes/web.php

Route::get('/choose-location', [LocationController::class, 'showChooseLocationForm'])->name('chooseLocationForm');
Route::post('/choose-location', [LocationController::class, 'chooseLocation'])->name('chooseLocation');