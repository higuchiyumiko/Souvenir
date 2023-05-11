<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ReviewsController;
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

//Route::get('/', function () {  
//    return view('items/index');
//});

Route::get('/',[ItemsController::class,'index']);
Route::get('/items/',[ItemsController::class,'nav']);
Route::get('/items/search',[ItemsController::class,'search']);
Route::get('/items/register',[ItemsController::class,'register']);
Route::post('/items/store',[ItemsController::class,'store']);
Route::get('/items/create/{id}',[ItemsController::class,'create']);
Route::post('/review/store',[ReviewsController::class,'store2']);
Route::get('/review/show/{id}',[ReviewsController::class,'show']);



