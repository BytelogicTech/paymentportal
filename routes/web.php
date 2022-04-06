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
use App\Http\Controllers\settlementaccountController;
use App\Http\Controllers\adjustmentController;
use App\Http\Controllers\MailboxController;

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
    Route::get('/index', [customerController::class, 'index'])->middleware('admin_madmin');
    Route::get('/create', [customerController::class, 'create'])->middleware('admin_madmin');
    Route::post('/store', [customerController::class, 'store'])->middleware('admin_madmin');
    Route::get('/edit/{id}', [customerController::class, 'edit'])->middleware('admin_madmin');
    Route::post('/update', [customerController::class, 'update'])->middleware('admin_madmin');
    Route::get('/delete/{id}', [customerController::class, 'destroy'])->middleware('admin');
    Route::post('/search', [customerController::class, 'search'])->middleware('admin_madmin');
});

Route::get('/bankaccountpayoutdestroy/{bankaccountpayoutid}', [customerController::class, 'bankaccountpayoutdestroy'])->middleware('admin');



Route::group(['prefix' => 'transaction'], function(){
    Route::get('/index', [TransactionController::class, 'index'])->name('transaction.index')->middleware('admin_madmin');
    Route::get('/create', [TransactionController::class, 'create'])->middleware('admin_madmin');
    Route::post('/store', [TransactionController::class, 'store'])->middleware('admin_madmin');
    Route::get('/edit/{id}', [TransactionController::class, 'edit'])->middleware('admin_madmin');
    Route::post('/update', [TransactionController::class, 'update'])->middleware('admin_madmin');
    Route::get('/delete/{id}', [TransactionController::class, 'destroy'])->middleware('admin');
    Route::post('/search', [TransactionController::class, 'search'])->middleware('admin_madmin');
    Route::get('/search', [TransactionController::class, 'index'])->middleware('admin_madmin');
});


Route::group(['prefix' => 'user'], function(){
    Route::get('/index', [UserController::class, 'index'])->middleware('admin_msuperadmin');
    Route::get('/create', [UserController::class, 'create'])->middleware('admin_msuperadmin');
    Route::post('/store', [UserController::class, 'store'])->middleware('admin_msuperadmin');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware('admin_msuperadmin');
    Route::post('/update', [UserController::class, 'update'])->middleware('admin_msuperadmin');


    Route::get('/selfedit', [UserController::class, 'selfedit'])->middleware('auth');
    Route::post('/selfupdate', [UserController::class, 'selfupdate'])->middleware('auth');

    Route::get('/delete/{id}', [UserController::class, 'destroy'])->middleware('admin');
});


Route::group(['prefix' => 'mailbox'], function(){
    Route::get('/index', [MailboxController::class, 'index'])->middleware('admin');
    Route::get('/sent', [MailboxController::class, 'sent'])->middleware('admin');
    Route::get('/create', [MailboxController::class, 'create'])->middleware('admin');
    Route::post('/store', [MailboxController::class, 'store'])->middleware('admin');
    Route::get('/edit/{id}', [MailboxController::class, 'edit'])->middleware('admin');
    Route::post('/update', [MailboxController::class, 'update'])->middleware('admin');
    Route::get('/delete/{id}', [MailboxController::class, 'destroy'])->middleware('admin');
});


Route::group(['prefix' => 'payout'], function(){
    Route::get('/index', [PayoutController::class, 'index'])->middleware('admin_madmin');
    Route::get('/create', [PayoutController::class, 'create'])->middleware('admin_madmin');
    Route::post('/store', [PayoutController::class, 'store'])->middleware('admin_madmin');
    Route::get('/edit/{id}', [PayoutController::class, 'edit'])->middleware('admin_madmin');
    Route::post('/update', [PayoutController::class, 'update'])->middleware('admin_madmin');
    Route::get('/delete/{id}', [PayoutController::class, 'destroy'])->middleware('admin');
    Route::post('/search', [PayoutController::class, 'search'])->middleware('admin_madmin');
    Route::get('/search', [PayoutController::class, 'index'])->middleware('admin_madmin');
});


Route::group(['prefix' => 'settlement'], function(){
    Route::get('/index', [settlementController::class, 'index'])->name('settlement.index')->middleware('admin_madmin');
    Route::get('/create', [settlementController::class, 'create'])->middleware('admin_madmin');
    Route::post('/store', [settlementController::class, 'store'])->middleware('admin_madmin');
    Route::get('/edit/{id}', [settlementController::class, 'edit'])->middleware('admin_madmin');
    Route::post('/update', [settlementController::class, 'update'])->middleware('admin_madmin');
    Route::get('/delete/{id}', [settlementController::class, 'destroy'])->middleware('admin');
    Route::post('/search', [settlementController::class, 'search'])->middleware('admin_madmin');
    Route::get('/search', [settlementController::class, 'index'])->middleware('admin_madmin');

    Route::get('/view/{id}', [settlementController::class, 'view'])->middleware('admin_madmin');
});

Route::group(['prefix' => 'settlementaccount'], function(){
    Route::get('/index', [settlementaccountController::class, 'index'])->name('settlementaccount.index')->middleware('admin_madmin');
    Route::get('/create', [settlementaccountController::class, 'create'])->middleware('admin_madmin');
    Route::post('/store', [settlementaccountController::class, 'store'])->middleware('admin_madmin');
    Route::get('/edit/{id}', [settlementaccountController::class, 'edit'])->middleware('admin_madmin');
    Route::post('/update', [settlementaccountController::class, 'update'])->middleware('admin_madmin');
    Route::get('/delete/{id}', [settlementaccountController::class, 'destroy'])->middleware('admin');
});



Route::group(['prefix' => 'adjustment'], function(){
    Route::get('/index', [adjustmentController::class, 'index'])->name('adjustment.index')->middleware('admin');
    Route::get('/adjustment_currency_conversion_create', [adjustmentController::class, 'adjustment_currency_conversion_create'])->middleware('admin');
    Route::post('/adjustment_currency_conversion_store', [adjustmentController::class, 'adjustment_currency_conversion_store'])->middleware('admin');

    Route::get('/adjustment_tier_commission_create', [adjustmentController::class, 'adjustment_tier_commission_create'])->middleware('admin');
    Route::post('/adjustment_tier_commission_store', [adjustmentController::class, 'adjustment_tier_commission_store'])->middleware('admin');

    Route::get('/other_adjustments_create', [adjustmentController::class, 'other_adjustments_create'])->middleware('admin');
    Route::post('/other_adjustments_store', [adjustmentController::class, 'other_adjustments_store'])->middleware('admin');
    Route::post('/search', [adjustmentController::class, 'search'])->middleware('admin');
    Route::get('/search', [adjustmentController::class, 'index'])->middleware('admin');

    Route::get('/edit/{id}', [adjustmentController::class, 'edit'])->middleware('admin');
    Route::post('/update', [adjustmentController::class, 'update'])->middleware('admin');
    Route::get('/delete/{id}', [adjustmentController::class, 'destroy'])->middleware('admin');
});


Route::post('/adjustmentupdate', [adjustmentController::class, 'adjustmentupdate'])->middleware('admin');

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('admin');

Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->middleware('admin');


/////// AJAX Functions

Route::post('/getcustomers_bymerchant', [PayoutController::class, 'getcustomers_bymerchant'])->middleware('admin');
Route::post('/getpayout_bycustomer', [PayoutController::class, 'getpayout_bycustomer'])->middleware('admin');
Route::post('/getpayouts_bymerchant', [PayoutController::class, 'getpayouts_bymerchant'])->middleware('admin');
Route::post('/getpayout_bycustomer_table', [PayoutController::class, 'getpayout_bycustomer_table'])->middleware('admin');

Route::post('/getcustomers_bymerchant', [TransactionController::class, 'getcustomers_bymerchant'])->middleware('admin');
