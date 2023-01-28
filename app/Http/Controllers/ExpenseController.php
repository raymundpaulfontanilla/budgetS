<?php

namespace App\Http\Controllers;

use App\Models\Expense;


class ExpenseController extends Controller
{
    public function displayexpense()
    {
        return view('dashboard.dpages.expense')
            ->with('expenses', Expense::orderByDesc('created_at')->get())
            ->with('totalexpense', Expense::sum('amount'));
    }

    public function deleteexpense($id)
    {
        $expense = Expense::find($id);
        $expense->delete();
        return redirect()->route('expense');
    }
}