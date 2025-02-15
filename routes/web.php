<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RoadmapController;
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

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// KELAS ROUTE
Route::get('/dashboard/kelas', [KelasController::class, 'index'])->name('kelas')->middleware('auth');
Route::get('/dashboard/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show')->middleware('auth');
Route::post('/dashboard/kelas/{kelas}', [KelasController::class, 'apply'])->name('kelas.apply')->middleware('auth');

// ROADMAP ROUTE
Route::get('/dashboard/roadmap', [RoadmapController::class, 'index'])->name('roadmap')->middleware('auth');
Route::get('/dashboard/roadmap/{id}', [RoadmapController::class, 'show'])->name('roadmap.show')->middleware('auth');


Route::get('/', function () {
    return view('landing');
});
