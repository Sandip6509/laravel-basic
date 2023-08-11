<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('simple-route', function () {
    return 'This is Simple Route';
});
Route::view('route-with-view','index');
Route::get('route-controller',[TestController::class,'index']);
Route::get('route-controller/{id}',[TestController::class,'show']);
Route::resource('items',ItemController::class);
Route::get('user/create',[HomeController::class,'create']);
Route::post('user/create',[HomeController::class,'store']);
Route::get('my-form',[HomeController::class,'myform']);
Route::post('my-form',[HomeController::class,'myformPost'])->name('my.form');
