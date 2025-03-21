<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\TaskController;

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
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/home/1', function () {
    return view('edit-task');
});

Route::get('/task', [TaskController::class, 'index'])->name('task');
Route::get('/archive', [ArchiveController::class, 'index'])->name('archive');
