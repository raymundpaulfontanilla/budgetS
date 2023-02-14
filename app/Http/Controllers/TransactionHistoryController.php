<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;

class TransactionHistoryController extends Controller
{
    public function transactionhistory()
    {
        $user = auth()->user();
        $income = Income::where('user_id', $user->id)->get()->map(function ($income) {
            $income['category'] = 'Income';
            return $income;
        });

        $expense = Expense::where('user_id', $user->id)->get()->map(function ($expense) {
            $expense['category'] = 'Expense';
            return $expense;
        });

        $merges = $income->concat($expense);
        $merges = $merges->sortByDesc('created_at');

        return view('dashboard.dpages.transactionhistory', compact('merges'));
    }
}