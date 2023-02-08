<?php


use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\GeneratePDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\SendEmailController;

use Illuminate\Support\Facades\Auth;



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
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/income', [IncomeController::class, 'displayincome'])->name('income');
    Route::get('/dashboard/expense', [ExpenseController::class, 'displayexpense'])->name('expense');
    Route::get('/dashboard/overview', [BudgetController::class, 'displayoverview'])->name('overview');
    Route::get('/dashboard/deleteincome/{id}', [IncomeController::class, 'deleteincome'])->name('deleteincome');
    Route::get('/dashboard/deleteexpense/{id}', [ExpenseController::class, 'deleteexpense'])->name('deleteexpense');
    Route::post('/dashboard/createincome', [IncomeController::class, 'createincome'])->name('createincome');
    Route::post('/dashboard/createexpense', [ExpenseController::class, 'createexpense'])->name('createexpense');
    Route::get('/dashboard/transactionhistory', [TransactionHistoryController::class, 'transactionhistory'])->name('transactionhistory');
    Route::get('/dashboard/generatepdf', [GeneratePDFController::class, 'generatepdf'])->name('generatepdf');
    Route::get('/dashboard/sendemail', [SendEmailController::class, 'sendemail'])->name('sendemail');
    Route::post('/dashboard/editincome/{id}', [IncomeController::class, 'editincome'])->name('editincome');
    Route::post('/dashboard/editexpense/{id}', [ExpenseController::class, 'editexpense'])->name('editexpense');

});

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/getstarted', function () {
    return view('pages.getstarted');
})->name('getstarted');