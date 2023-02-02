<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\GeneratePDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\SendEmailController;



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
// Auth::routes();

Route::get('/income', [IncomeController::class, 'displayincome'])->name('income');
Route::get('/expense', [ExpenseController::class, 'displayexpense'])->name('expense');
Route::get('/', [BudgetController::class, 'displayoverview'])->name('overview');
Route::get('deleteincome/{id}', [IncomeController::class, 'deleteincome'])->name('deleteincome');
Route::get('deleteexpense/{id}', [ExpenseController::class, 'deleteexpense'])->name('deleteexpense');
Route::post('/createincome', [IncomeController::class, 'createincome'])->name('createincome');
Route::post('/createexpense', [ExpenseController::class, 'createexpense'])->name('createexpense');
Route::get('/transactionhistory', [TransactionHistoryController::class, 'transactionhistory'])->name('transactionhistory');

Route::get('/generatepdf', [GeneratePDFController::class, 'generatepdf'])->name('generatepdf');

Route::get('/landingpage', function () {
    return view('layouts/landingpage');
})->name('landingpage');

Route::get('/about', function () {
    return view('layouts/about');
})->name('about');

Route::get('sendemail', [SendEmailController::class, 'sendemail'])->name('sendemail');