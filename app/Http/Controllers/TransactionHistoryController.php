<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;

class TransactionHistoryController extends Controller
{
    public function transactionhistory(){

        $income = Income::all();;
        $expense = Expense::all();
        $merges = $income->concat($expense);
        return view('dashboard.dpages.transactionhistory')
        ->with('merges',$merges);
    }
}
