<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firstcontroller;
use App\Http\Controllers\ORMController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QueryBuilder;
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
    return view('welcome');
});

// Route::view('/','home');

Route::get('/first',[Firstcontroller::class,'index']);

//template

Route::get('/project',[Firstcontroller::class,'template'])->middleware('UserCheck');

//QueryBuilder

Route::get('/select',[QueryBuilder::class,'Select']);

//group middleware
Route::middleware(['UserCheck'])->group(function (){
    Route::get('/select',[QueryBuilder::class,'Select']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Eloquent ORM
Route::get('/all', [ORMController::class, 'index']);
Route::get('/where', [ORMController::class, 'show']);
Route::get('/insert', [ORMController::class, 'store']);
Route::get('/update', [ORMController::class, 'update']);
Route::get('/delete', [ORMController::class, 'destroy']);

//crud
Route::get('/register', [CRUDController::class, 'index']);
Route::post('/store', [CRUDController::class, 'store']);
Route::get('/show', [CRUDController::class, 'show']);

//product-crud
Route::get('/product', [ProductController::class, 'index']);
Route::post('/submit_form', [ProductController::class, 'store']);
Route::get('/pro_show', [ProductController::class, 'show']);
Route::get('/delete/{id}', [ProductController::class, 'destroy']);