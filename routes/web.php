<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

// Auth Routes - Only for guests
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.show');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('users.store');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/home', function () {
    return view('index');
});

// Protected Dashboard Routes - Require Authentication
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/gantipassword', [PasswordController::class, 'show'])->name('change-password.show');
    Route::post('/gantipassword', [PasswordController::class, 'update'])->name('password.update');

    Route::get('/user-info', function () {
        return view('admin.user-info');
    })->name('user-info');

    Route::get('/inputdosen', function () {
        return response()->file(public_path('input_dosen.php'));
    });

    Route::get('/inputdatajabatan', function () {
        return response()->file(public_path('input_datajabatan.php'));
    });

    Route::get('/inputpenelitian', function () {
        return response()->file(public_path('input_penelitian.php'));
    });
});

// User Registration Routes
// (Moved inside middleware('guest') group above)

// Route::get('/loginadmin', function () {
//     return response()->file(public_path('loginadmin.php'));
// });
