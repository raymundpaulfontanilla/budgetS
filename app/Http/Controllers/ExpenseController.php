<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;


class ExpenseController extends Controller
{
    public function displayexpense()
    {
        $monday = Expense::whereRaw("WEEKDAY(created_at) = 0")->sum('amount');
        $tuesday = Expense::whereRaw("WEEKDAY(created_at) = 1")->sum('amount');
        $wednesday = Expense::whereRaw("WEEKDAY(created_at) = 2")->sum('amount');
        $thursday = Expense::whereRaw("WEEKDAY(created_at) = 3")->sum('amount');
        $friday = Expense::whereRaw("WEEKDAY(created_at) = 4")->sum('amount');
        $saturday = Expense::whereRaw("WEEKDAY(created_at) = 5")->sum('amount');
        $sunday = Expense::whereRaw("WEEKDAY(created_at) = 6")->sum('amount');
        return view('dashboard.dpages.expense', compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'))
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

    public function editexpense(Request $request){
        $expense = Expense::find($request->id);
        $expense->name = $request->name;
        $expense->description = $request->description;
        $expense->amount = $request->amount;
        $expense->save();
        return redirect()->route('expense');
    }


}