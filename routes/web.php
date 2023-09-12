<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsController;
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


Route::GET('users', [UserController::class, 'index'])->name('users');
Route::GET('/', function () {return view('auth/login');}) -> name('main');
Route::GET('dashboard', function () {return view('dashboard');}) -> name('dashboard');
Route::GET('auth/login', [LoginController::class, 'index']) -> name('login');
Route::POST('auth/login', [LoginController::class, 'login']);
Route::POST('auth/logout', [LoginController::class, 'logout']) -> name('logout');
Route::GET('auth/register', [RegisterController::class, 'index']) -> name('register');
Route::GET('profile', [ProfileController::class, 'profile']) -> name('profile');
Route::POST('auth/register', [RegisterController::class, 'store']);
Route::POST('profile/password', [ProfileController::class, 'update']);
Route::POST('profile/birthDate', [ProfileController::class, 'birthDate']);
Route::POST('profile/email', [ProfileController::class, 'email']);
Route::DELETE('profile/delete', [ProfileController::class, 'delete']);
Route::GET('terms', [TermsController::class,'terms'])->name('terms');
