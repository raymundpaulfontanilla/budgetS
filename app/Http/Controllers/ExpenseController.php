<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;


class ExpenseController extends Controller
{
    public function displayexpense()
    {
        return view('dashboard.dpages.expense')
            ->with('expenses', Expense::orderByDesc('created_at')->get())
            ->with('totalexpense', Expense::sum('amount'));
    }

    public function createexpense(Request $request)
    {
        $expenses = new Expense;
        $expenses->name = $request->name;
        $expenses->description = $request->description;
        $expenses->amount = $request->amount;
        $expenses->save();

        return redirect()->route('expense');

    }

    public function deleteexpense($id)
    {
        $expense = Expense::find($id);
        $expense->delete();
        return redirect()->route('expense');
    }
}