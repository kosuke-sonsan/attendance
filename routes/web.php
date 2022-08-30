<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClockController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AuthController;

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

/*  認証ページ用ルート記述  */

Route::get('/login', [AuthController::class, 'index'])->name('login.view');

/*  会員登録ページ用ルート記述  */

Route::get('/register', [AuthController::class, 'view'])->name('register.view');

/*  ログイン後ページ用ルート記述  */

Route::get('/', [ClockController::class, 'index'])->name('mainpage.view');

Route::get('/attendance', [WorkController::class, 'index'])->name('attendance.view');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
