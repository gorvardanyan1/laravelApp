<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/students/create', [StudentController::class, 'create'])->middleware('auth');
Route::get('/students/{id}', [StudentController::class, 'show'])->middleware('auth');

Route::post('/students', [StudentController::class, 'store']);

Route::delete('/students/{id}', [StudentController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
