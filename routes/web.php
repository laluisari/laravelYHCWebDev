<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/tutor', function () {
    return view('tutor');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'createUser']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
// Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/users', UserController::class)->middleware('auth');
Route::resource('/dashboard/project', ProjectController::class)->middleware('auth');

