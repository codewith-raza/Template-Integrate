<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ListsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\PostController;

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

    Route::post('countries/reorder', [CountriesController::class,'reorder'])->name('countries.reorder');
    Route::delete('countries/destroy', [CountriesController::class,'massDestroy'])->name('countries.massDestroy');
    Route::resource('/countries', CountriesController::class);
    
    Route::get('/lists', [UserController::class, 'lists']);

    Route::get('post',[PostController::class,'index'])->name('post');
    Route::post('post-sortable',[PostController::class,'update'])->name('post-sortable');
});


require __DIR__.'/auth.php';
