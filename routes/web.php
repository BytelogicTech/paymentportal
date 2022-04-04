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
use App\http\Controllers\adjustmentController;
use App\http\Controllers\MailboxController;

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
    Route::get('/index', [BankController::class, 'index'])->middleware('admin');
    Route::get('/create', [BankController::class, 'create'])->middleware('admin');
    Route::post('/store', [BankController::class, 'store'])->middleware('admin');
    Route::get('/edit/{id}', [BankController::class, 'edit'])->middleware('admin');
    Route::post('/update', [BankController::class, 'update'])->middleware('admin');
    Route::get('/delete/{id}', [BankController::class, 'destroy'])->middleware('admin');
});
Route::post('/bankaccountupdate', [BankController::class, 'bankaccountupdate'])->middleware('admin');
Route::get('/bankaccountdestroy/{bankaccountid}', [BankController::class, 'bankaccountdestroy'])->middleware('admin');


Route::group(['prefix' => 'merchant'], function(){
    Route::get('/index', [merchantController::class, 'index'])->middleware('admin');
    Route::get('/create', [merchantController::class, 'create'])->middleware('admin');
    Route::post('/store', [merchantController::class, 'store'])->middleware('admin');
    Route::get('/edit/{id}', [merchantController::class, 'edit'])->middleware('admin');
    Route::post('/update', [merchantController::class, 'update'])->middleware('admin');
    Route::get('/delete/{id}', [merchantController::class, 'destroy'])->middleware('admin');
});



Route::group(['prefix' => 'customer'], function(){
    Route::get('/index', [customerController::class, 'index']);
    Route::get('/create', [customerController::class, 'create'])->middleware('admin_madmin');
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
    Route::post('/search', [TransactionController::class, 'search']);
    Route::get('/search', [TransactionController::class, 'index']);
});


Route::group(['prefix' => 'user'], function(){
    Route::get('/index', [UserController::class, 'index'])->middleware('admin');
    Route::get('/create', [UserController::class, 'create'])->middleware('admin');
    Route::post('/store', [UserControllMailboxControllerer::class, 'store'])->middleware('admin');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware('admin');
    Route::post('/update', [UserController::class, 'update'])->middleware('admin');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->middleware('admin');
});


Route::group(['prefix' => 'mailbox'], function(){
    Route::get('/index', [MailboxController::class, 'index']);
    Route::get('/sent', [MailboxController::class, 'sent']);
    Route::get('/create', [MailboxController::class, 'create']);
    Route::post('/store', [MailboxController::class, 'store']);
    Route::get('/edit/{id}', [MailboxController::class, 'edit']);
    Route::post('/update', [MailboxController::class, 'update']);
    Route::get('/delete/{id}', [MailboxController::class, 'destroy']);
});



Route::group(['prefix' => 'payout'], function(){
    Route::get('/index', [PayoutController::class, 'index']);
    Route::get('/create', [PayoutController::class, 'create']);
    Route::post('/store', [PayoutController::class, 'store']);
    Route::get('/edit/{id}', [PayoutController::class, 'edit']);
    Route::post('/update', [PayoutController::class, 'update']);
    Route::get('/delete/{id}', [PayoutController::class, 'destroy']);
    Route::post('/search', [PayoutController::class, 'search']);
    Route::get('/search', [PayoutController::class, 'index']);
});


Route::group(['prefix' => 'settlement'], function(){
    Route::get('/index', [settlementController::class, 'index'])->name('settlement.index');
    Route::get('/create', [settlementController::class, 'create']);
    Route::post('/store', [settlementController::class, 'store']);
    Route::get('/edit/{id}', [settlementController::class, 'edit']);
    Route::post('/update', [settlementController::class, 'update']);
    Route::get('/delete/{id}', [settlementController::class, 'destroy']);
    Route::post('/search', [settlementController::class, 'search']);
    Route::get('/search', [settlementController::class, 'index']);

    Route::get('/view/{id}', [settlementController::class, 'view']);
});



Route::group(['prefix' => 'settlementaccount'], function(){
    Route::get('/index', [settlementaccountController::class, 'index'])->name('settlementaccount.index');
    Route::get('/create', [settlementaccountController::class, 'create']);
    Route::post('/store', [settlementaccountController::class, 'store']);
    Route::get('/edit/{id}', [settlementaccountController::class, 'edit']);
    Route::post('/update', [settlementaccountController::class, 'update']);
    Route::get('/delete/{id}', [settlementaccountController::class, 'destroy']);
});





Route::group(['prefix' => 'adjustment'], function(){
    Route::get('/index', [adjustmentController::class, 'index'])->name('adjustment.index');
    Route::get('/adjustment_currency_conversion_create', [adjustmentController::class, 'adjustment_currency_conversion_create']);
    Route::post('/adjustment_currency_conversion_store', [adjustmentController::class, 'adjustment_currency_conversion_store']);

    Route::get('/adjustment_tier_commission_create', [adjustmentController::class, 'adjustment_tier_commission_create']);
    Route::post('/adjustment_tier_commission_store', [adjustmentController::class, 'adjustment_tier_commission_store']);

    Route::get('/other_adjustments_create', [adjustmentController::class, 'other_adjustments_create']);
    Route::post('/other_adjustments_store', [adjustmentController::class, 'other_adjustments_store']);
    Route::post('/search', [adjustmentController::class, 'search']);
    Route::get('/search', [adjustmentController::class, 'index']);

    Route::get('/edit/{id}', [adjustmentController::class, 'edit']);
    Route::post('/update', [adjustmentController::class, 'update']);
    Route::get('/delete/{id}', [adjustmentController::class, 'destroy']);
});


Route::post('/adjustmentupdate', [adjustmentController::class, 'adjustmentupdate']);

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test']);


/////// AJAX Functions

Route::post('/getcustomers_bymerchant', [PayoutController::class, 'getcustomers_bymerchant']);
Route::post('/getpayout_bycustomer', [PayoutController::class, 'getpayout_bycustomer']);
Route::post('/getpayouts_bymerchant', [PayoutController::class, 'getpayouts_bymerchant']);
Route::post('/getpayout_bycustomer_table', [PayoutController::class, 'getpayout_bycustomer_table']);

Route::post('/getcustomers_bymerchant', [TransactionController::class, 'getcustomers_bymerchant']);
