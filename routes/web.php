<?php

use App\Http\Middleware\LogCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;

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
    return view('login');
});
// Route::get('users','usersController@list');

Route::get('create',[usersController::class,'create']);
Route::post('loginsubmit',[usersController::class,'loginsubmit']);
Route::post('createsubmit',[usersController::class,'createsubmit']);

Route::group(['middleware'=>[LogCheck::class]], function(){
    Route::get('users',[usersController::class,'list']);

});

