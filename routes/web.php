<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ListsController;

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
Route::middleware(['auth', 'verified'])->group( function() {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Route::get('/user', function () {
    //     return view('user');
    // })->name('user');

    Route::resource('/user', UserController::class);

    Route::resource('/question', QuestionController::class);
    Route::resource('/lists', ListsController::class);
    
    Route::get('/lists', [UserController::class, 'lists']);
});


require __DIR__.'/auth.php';
