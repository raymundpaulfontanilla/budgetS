<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;


class ExpenseController extends Controller
{
    public function displayexpense()
    {
        $january = Expense::whereRaw("MONTH(created_at) = 1")->sum('amount');
        $february = Expense::whereRaw("MONTH(created_at) = 2")->sum('amount');
        $march = Expense::whereRaw("MONTH(created_at) = 3")->sum('amount');
        $april = Expense::whereRaw("MONTH(created_at) = 4")->sum('amount');
        $may = Expense::whereRaw("MONTH(created_at) = 5")->sum('amount');
        $june = Expense::whereRaw("MONTH(created_at) = 6")->sum('amount');
        $july = Expense::whereRaw("MONTH(created_at) = 7")->sum('amount');
        $august = Expense::whereRaw("MONTH(created_at) = 8")->sum('amount');
        $september = Expense::whereRaw("MONTH(created_at) = 9")->sum('amount');
        $october = Expense::whereRaw("MONTH(created_at) = 10")->sum('amount');
        $november = Expense::whereRaw("MONTH(created_at) = 11")->sum('amount');
        $december = Expense::whereRaw("MONTH(created_at) = 12")->sum('amount');
        $monday = Expense::whereRaw("WEEKDAY(created_at) = 0")->sum('amount');
        $tuesday = Expense::whereRaw("WEEKDAY(created_at) = 1")->sum('amount');
        $wednesday = Expense::whereRaw("WEEKDAY(created_at) = 2")->sum('amount');
        $thursday = Expense::whereRaw("WEEKDAY(created_at) = 3")->sum('amount');
        $friday = Expense::whereRaw("WEEKDAY(created_at) = 4")->sum('amount');
        $saturday = Expense::whereRaw("WEEKDAY(created_at) = 5")->sum('amount');
        $sunday = Expense::whereRaw("WEEKDAY(created_at) = 6")->sum('amount');
        return view('dashboard.dpages.expense', compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'))
            ->with('expenses', Expense::orderByDesc('created_at')->get())
            ->with('totalexpense', Expense::sum('amount'));
    }

    public function createexpense(Request $request)
    {
        $expenses = new Expense;
        $expenses->name = $request->name;
        $expenses->description = $request->description;
        $expenses->amount = $request->amount;
        $request->validate([
            'amount' => 'numeric',
        ]);
        $expenses->save();
        $request->session()->flash('expense', 'Expense Recorded Successfully!');
        return redirect()->route('expense');
    }

    public function deleteexpense($id)
    {
        $expense = Expense::find($id);
        $expense->delete();
        session()->flash('message', 'Expense successfully deleted');
        return redirect()->route('expense');
    }

    public function editexpense(Request $request)
    {
        $expense = Expense::find($request->id);
        $expense->name = $request->name;
        $expense->description = $request->description;
        $expense->amount = $request->amount;
        $request->validate([
            'amount' => 'numeric',
        ]);
        $expense->save();
        session()->flash('update', 'Expense record successfully updated');
        return redirect()->route('expense');
    }


}