<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;


class ExpenseController extends Controller
{
    public function displayexpense()
    {
        $user = auth()->user();
        $january = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 1")->sum('amount');
        $february = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 2")->sum('amount');
        $march = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 3")->sum('amount');
        $april = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 4")->sum('amount');
        $may = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 5")->sum('amount');
        $june = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 6")->sum('amount');
        $july = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 7")->sum('amount');
        $august = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 8")->sum('amount');
        $september = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 9")->sum('amount');
        $october = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 10")->sum('amount');
        $november = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 11")->sum('amount');
        $december = Expense::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 12")->sum('amount');
        $monday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 0")->sum('amount');
        $tuesday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 1")->sum('amount');
        $wednesday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 2")->sum('amount');
        $thursday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 3")->sum('amount');
        $friday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 4")->sum('amount');
        $saturday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 5")->sum('amount');
        $sunday = Expense::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 6")->sum('amount');
        $expenses = Expense::where('user_id', $user->id)->get();
        $totalexpense = Expense::where('user_id', $user->id)->sum('amount');
        return view('dashboard.dpages.expense', compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'))
            ->with('expenses', $expenses)
            ->with('totalexpense', $totalexpense);
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
        $expenses->user_id = auth()->id();
        $expenses->save();
        $request->session()->flash('expense', 'Expense Recorded Successfully!');
        return redirect()->route('expense');
    }

    public function deleteexpense($id)
    {
        $expense = Expense::find($id);
        $expense->delete();
        session()->flash('message', 'Expense record successfully deleted');
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