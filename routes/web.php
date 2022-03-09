<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BankController;
use Illuminate\Support\Facades\Route;

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

Route::get('index', [CategoryController::class, 'index']);
Route::get('create', [CategoryController::class, 'create']);
Route::post('store', [CategoryController::class, 'store']);
Route::get('edit/{id}', [CategoryController::class, 'edit']);
Route::post('update', [CategoryController::class, 'update']);
Route::get('delete/{id}', [CategoryController::class, 'destroy']);


Route::group(['prefix' => 'bank'], function(){
    Route::get('/index', [BankController::class, 'index']);
    Route::get('/create', [BankController::class, 'create']);
    Route::post('/store', [BankController::class, 'store']);
    Route::get('/edit/{id}', [BankController::class, 'edit']);
    Route::post('/update', [BankController::class, 'update']);
    Route::get('/delete/{id}', [BankController::class, 'destroy']);
});



//  Route::resource('bank',BankController::class);
