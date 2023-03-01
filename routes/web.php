<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\usercontroller;

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
Route::group(['middleware'=>'auth'],function(){
    
    Route::get('home',[Authcontroller::class,'home'])->name('home');
    Route::get('logout',[Authcontroller::class,'logout'])->name('logout');
});

Route::middleware(['auth','isAdmin'])->group(function()
{
    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('/categories','Admin\categoryController@index');
    Route::get('/Add-category','Admin\categoryController@add');
    Route::post('/insert-category','Admin\categoryController@insert');
    Route::get('edit-prod/{id}',[categoryController::class,'edit']);
    Route::put('update-category/{id}',[categoryController::class,'update']);
    Route::get('delete-category/{id}',[categoryController::class,'destroy']);
});

  