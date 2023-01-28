<?php

namespace App\Http\Controllers;

use App\Models\Expense;


class ExpenseController extends Controller
{
    public function displayExpense()
    {
        return view('dashboard.dpages.expenses')->with('expenses', Expense::orderByDesc('created_at')->get())->with('totalexpense', Expense::sum('amount'));
    }
}