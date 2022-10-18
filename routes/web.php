<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClockController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

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

/*  会員登録ページ用ルート記述  */

Route::get('/register', [AuthController::class, 'index_register'])->name('register.view');
Route::post('/register', [AuthController::class, 'register'])->name('register.register');

/*  認証ページ用ルート記述  */

Route::get('/login', [AuthController::class, 'index_login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.logout');

/*  ログイン後ページ用ルート記述  */
Route::group(['middleware' => 'auth'], function(){
  
  /*  メインページ表示用ルーティング  */
  Route::get('/', [ClockController::class, 'index'])->name('mainpage.view');
  
  /*  勤怠管理用ルーティング  */
  
  Route::post('/attendance/start', [AttendanceController::class, 'start'])->name('attendance.start');
  Route::post('/attendance/stop', [AttendanceController::class, 'end'])->name('attendance.stop');
  
  /*  休憩管理用ルーティング  */
  
  Route::post('/rest/start', [RestController::class, 'restStart'])->name('rest.start');
  Route::post('/rest/end', [RestController::class, 'restEnd'])->name('rest.end');
  
  /*  日付別勤怠管理画面表示用ルーティング  */
  
  Route::get('/attendance', [WorkController::class, 'index'])->name('attendance.view');  
  
  /*  日付変更用ルーティング  */
  
  Route::get('/attendance/date/add', [WorkController::class, 'addDate'])->name('attendance.addDate');
  Route::get('/attendance/date/sub', [WorkController::class, 'subDate'])->name('attendance.subDate');
  
});




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
