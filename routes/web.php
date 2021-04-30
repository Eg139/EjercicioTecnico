<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ideasController;
use App\Models\Ideas;

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
    return view('auth.login');
});

Route::get('/ideas', function () {
    return view('ideas.index');
});

//Route::get('ideas/create', [ideasController::class,'create']);

Route::resource('ideas', ideasController::class)->middleware('auth');


Auth::routes(['reset'=>false]);

Route::get('/home', [ideasController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ideasController::class, 'index'])->name('home');
    
});