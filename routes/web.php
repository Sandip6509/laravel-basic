<?php

use App\CustomFacade\Sandeep;
use App\Http\Controllers\CustomValidationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
Route::get("check-it",[HomeController::class,'checkType'])->middleware('checkType');

Route::controller(PostController::class)->group(function(){
    Route::get('posts', 'index');
    Route::post('posts', 'store')->name('posts.store');
    Route::get('posts/{id}', 'show')->name('posts.show');
});
Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload','index');
    Route::post('image-upload','store')->name('image.store');
    Route::get('ajax-image-upload','ajaxImage');
    Route::post('ajax-image-upload','ajaxStore')->name('ajaximage.store');
    Route::get('multiple-image-upload','multipleImage');
    Route::post('multiple-image-upload','multipleStore')->name('multipleimage.store');
});
Route::controller(FileController::class)->group(function(){
    Route::get('file-upload','index');
    Route::post('file-upload','store')->name('file.store');
});
Route::get('users',[UserController::class,'index']);
Route::get('ajax-pagination',[UserController::class,'ajaxPagination'])->name('ajax.pagination');
Route::get('product',[ProductController::class,'index']);
Route::get('custom-validation',[CustomValidationController::class,'create']);
Route::post('custom-validation',[CustomValidationController::class,'store'])->name('custom.validation');
Route::get('custom-helpers', function(){
    $imageName = 'example.png';
    $fullpath = productImagePath($imageName);
    return changeDateFormate(date('Y-m-d'),'m/d/Y'). '<br/> File Path:'.$fullpath;
});

Route::get('my-helper', function () {
    return view('myhelper');
});

Route::get('sandeep', function(){
    $imagepath = Sandeep::productImagePath('image.jpg');
    print_r($imagepath);
});

Route::get('helper', function(){
    $googleAPIToken = config('google.api_token');
    dd($googleAPIToken);
});

Route::get('create-custom-log', function () {
    \Log::channel('sandeep')->info('This is testing for Sandeep!');
    dd('done');
});