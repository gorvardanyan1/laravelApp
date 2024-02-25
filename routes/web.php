<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students/{id}', [StudentController::class, 'show']);

Route::post('/students', [StudentController::class, 'store']);

Route::delete('/students/{id}', [StudentController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
