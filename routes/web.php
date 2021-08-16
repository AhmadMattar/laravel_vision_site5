<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::prefix('site5')->group(function(){
    Route::get('/',[PagesController::class,'index'])->name('site5index');
    Route::get('/about',[PagesController::class,'about'])->name('site5about');
    Route::get('/services',[PagesController::class,'services'])->name('site5services');
    Route::prefix('portolio')->group(function(){
        Route::get('/',[PagesController::class,'portfolio'])->name('site5portfolio');
        Route::get('/details',[PagesController::class,'portfolioDetails'])->name('site5portfolioDetails');
    });
    Route::get('/portfolio',[PagesController::class,'portfolio'])->name('site5portfolio');
    Route::get('/team',[PagesController::class,'team'])->name('site5team');
    Route::get('/contact',[PagesController::class,'contact'])->name('site5contact');
    Route::post('/contact',[PagesController::class,'contactSubmit'])->name('contactSubmit');
});

Route::get('/', function () {
    return view('welcome');
});
