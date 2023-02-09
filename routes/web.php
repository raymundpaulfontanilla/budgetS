<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\GeneratePDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/getstarted', function () {
    return view('pages.getstarted');
})->name('getstarted');

Route::fallback(function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    //Income Controllers
    Route::get('/dashboard/income', [IncomeController::class, 'displayincome'])->name('income');
    Route::post('/dashboard/createincome', [IncomeController::class, 'createincome'])->name('createincome');
    Route::get('/dashboard/deleteincome/{id}', [IncomeController::class, 'deleteincome'])->name('deleteincome');
    Route::post('/dashboard/editincome/{id}', [IncomeController::class, 'editincome'])->name('editincome');

    //Expense Controllers
    Route::get('/dashboard/expense', [ExpenseController::class, 'displayexpense'])->name('expense');
    Route::post('/dashboard/createexpense', [ExpenseController::class, 'createexpense'])->name('createexpense');
    Route::get('/dashboard/deleteexpense/{id}', [ExpenseController::class, 'deleteexpense'])->name('deleteexpense');
    Route::post('/dashboard/editexpense/{id}', [ExpenseController::class, 'editexpense'])->name('editexpense');

    //User Controllers
    Route::get('/dashboard/userprofile', [UserController::class, 'displayuserprofile'])->name('userprofile');
    Route::post('/dashboard/edituserprofile', [UserController::class, 'edituserprofile'])->name('edituserprofile');

    //Budget Controller
    Route::get('/dashboard/overview', [BudgetController::class, 'displayoverview'])->name('overview');

    //Transaction History Controller
    Route::get('/dashboard/transactionhistory', [TransactionHistoryController::class, 'transactionhistory'])->name('transactionhistory');

    //PDF Controller
    Route::get('/dashboard/generatepdf', [GeneratePDFController::class, 'generatepdf'])->name('generatepdf');

    //Sendemail Controlle
    Route::get('/dashboard/sendemail', [SendEmailController::class, 'sendemail'])->name('sendemail');
});


    