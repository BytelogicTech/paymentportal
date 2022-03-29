<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\merchantController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayoutController;
use App\Http\Controllers\settlementController;
use App\http\Controllers\settlementaccountController;

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



Route::get('/', [HomeController::class, 'index']);


Route::group(['prefix' => 'bank'], function(){
    Route::get('/index', [BankController::class, 'index']);
    Route::get('/create', [BankController::class, 'create']);
    Route::post('/store', [BankController::class, 'store']);
    Route::get('/edit/{id}', [BankController::class, 'edit']);
    Route::post('/update', [BankController::class, 'update']);
    Route::get('/delete/{id}', [BankController::class, 'destroy']);
});


   
    Route::post('/bankaccountupdate', [BankController::class, 'bankaccountupdate']);
    Route::get('/bankaccountdestroy/{bankaccountid}', [BankController::class, 'bankaccountdestroy']);


Route::group(['prefix' => 'merchant'], function(){
    Route::get('/index', [merchantController::class, 'index']);
    Route::get('/create', [merchantController::class, 'create']);
    Route::post('/store', [merchantController::class, 'store']);
    Route::get('/edit/{id}', [merchantController::class, 'edit']);
    Route::post('/update', [merchantController::class, 'update']);
    Route::get('/delete/{id}', [merchantController::class, 'destroy']);
});



Route::group(['prefix' => 'customer'], function(){
    Route::get('/index', [customerController::class, 'index']);
    Route::get('/create', [customerController::class, 'create']);
    Route::post('/store', [customerController::class, 'store']);
    Route::get('/edit/{id}', [customerController::class, 'edit']);
    Route::post('/update', [customerController::class, 'update']);
    Route::get('/delete/{id}', [customerController::class, 'destroy']);
    Route::post('/search', [customerController::class, 'search']);
});

Route::get('/bankaccountpayoutdestroy/{bankaccountpayoutid}', [customerController::class, 'bankaccountpayoutdestroy']);



Route::group(['prefix' => 'transaction'], function(){
    Route::get('/index', [TransactionController::class, 'index'])->name('transaction.index');
    Route::get('/create', [TransactionController::class, 'create']);
    Route::post('/store', [TransactionController::class, 'store']);
    Route::get('/edit/{id}', [TransactionController::class, 'edit']);
    Route::post('/update', [TransactionController::class, 'update']);
    Route::get('/delete/{id}', [TransactionController::class, 'destroy']);
});


Route::group(['prefix' => 'user'], function(){
    Route::get('/index', [UserController::class, 'index']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/store', [UserController::class, 'store']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/update', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'payout'], function(){
    Route::get('/index', [PayoutController::class, 'index']);
    Route::get('/create', [PayoutController::class, 'create']);
    Route::post('/store', [PayoutController::class, 'store']);
    Route::get('/edit/{id}', [PayoutController::class, 'edit']);
    Route::post('/update', [PayoutController::class, 'update']);
    Route::get('/delete/{id}', [PayoutController::class, 'destroy']);
});


Route::group(['prefix' => 'settlement'], function(){
    Route::get('/index', [settlementController::class, 'index'])->name('settlement.index');
    Route::get('/create', [settlementController::class, 'create']);
    Route::post('/store', [settlementController::class, 'store']);
    Route::get('/edit/{id}', [settlementController::class, 'edit']);
    Route::post('/update', [settlementController::class, 'update']);
    Route::get('/delete/{id}', [settlementController::class, 'destroy']);
});



Route::group(['prefix' => 'settlementaccount'], function(){
    Route::get('/index', [settlementaccountController::class, 'index'])->name('settlementaccount.index');
    Route::get('/create', [settlementaccountController::class, 'create']);
    Route::post('/store', [settlementaccountController::class, 'store']);
    Route::get('/edit/{id}', [settlementaccountController::class, 'edit']);
    Route::post('/update', [settlementaccountController::class, 'update']);
    Route::get('/delete/{id}', [settlementaccountController::class, 'destroy']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/////// AJAX Functions

Route::post('/getcustomers_bymerchant', [PayoutController::class, 'getcustomers_bymerchant']);
Route::post('/getpayout_bycustomer', [PayoutController::class, 'getpayout_bycustomer']);
Route::post('/getpayouts_bymerchant', [PayoutController::class, 'getpayouts_bymerchant']);
