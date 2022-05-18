<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('web.welcome');
});
Route::get('/list', function () {
    return view('web.list');
});

Route::get('/blog', function () {
    return view('web.blog');
});
Route::get('/account', function () {
    return view('web.account');
});
Route::get('/details', function () {
    return view('web.detail');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::delete('/dashboard/delete', [DashboardController::class, 'UserDelete'])->name('delete');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');



