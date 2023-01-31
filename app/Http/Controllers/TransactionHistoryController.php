<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;

class TransactionHistoryController extends Controller
{
    public function transactionhistory()
    {
        $income = Income::get()->map(function ($income) {
            $income['category'] = 'Income';
            return $income;
        });

        $expense = Expense::get()->map(function ($expense) {
            $expense['category'] = 'Expense';
            return $expense;
        });

        $merges = $income->concat($expense);
        $merges = $merges->sortByDesc('created_at');

        return view('dashboard.dpages.transactionhistory', compact('merges'));
    }
}