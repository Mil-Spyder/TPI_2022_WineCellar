<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BottleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RatingController;

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

/*
TO-DO WARNING rajouter les {id} au URI nécessaires.
*/
Route::get('/bar',[MailController::class,'bar']);

Route::middleware(['auth'])->group(function(){

Route::get('',[BottleController::class,'index'])->name('home');
Route::get('/create',[BottleController::class,'create'])->name('create');
Route::post('/',[BottleController::class,'store'])->name('store');
Route::get('/edit/{id}',[BottleController::class,'edit'])->name('edit');
Route::get('/show/{id}',[BottleController::class,'show'])->name('show');
Route::get('/update/{id}',[BottleController::class,'update'])->name('update');
Route::get('/delete/{id}',[BottleController::class,'destroy'])->name('delete');
Route::get('/exportPDF/{id}',[BottleController::class,'createPDF'])->name('PDF');

Route::post('/comment/created',[CommentController::class,'create'])->name('add');
Route::post('/userrating/', [RatingController::class,'create'])->name('rate');
Route::post('userrating/edit/{id}',[RatingController::class,'edit'])->name('updateRate');
});


/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__.'/auth.php';
