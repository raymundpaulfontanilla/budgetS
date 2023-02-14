<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function displayincome()
    {
        $user = auth()->user();
        $january = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 1")->sum('amount');
        $february = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 2")->sum('amount');
        $march = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 3")->sum('amount');
        $april = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 4")->sum('amount');
        $may = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 5")->sum('amount');
        $june = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 6")->sum('amount');
        $july = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 7")->sum('amount');
        $august = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 8")->sum('amount');
        $september = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 9")->sum('amount');
        $october = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 10")->sum('amount');
        $november = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 11")->sum('amount');
        $december = Income::where('user_id', $user->id)->whereRaw("MONTH(created_at) = 12")->sum('amount');
        $monday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 0")->sum('amount');
        $tuesday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 1")->sum('amount');
        $wednesday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 2")->sum('amount');
        $thursday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 3")->sum('amount');
        $friday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 4")->sum('amount');
        $saturday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 5")->sum('amount');
        $sunday = Income::where('user_id', $user->id)->whereRaw("WEEKDAY(created_at) = 6")->sum('amount');
        $incomes = Income::where('user_id', $user->id)->get();
        $totalincome = Income::where('user_id', $user->id)->sum('amount');
        return view('dashboard.dpages.income', compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'))
            ->with('incomes', $incomes)
            ->with('totalincome', $totalincome);
    }
    public function createincome(Request $request)
    {

        $incomes = new Income;
        $incomes->name = $request->name;
        $incomes->description = $request->description;
        $incomes->amount = $request->amount;
        $request->validate([
            'amount' => 'required|numeric',
        ]);
        $incomes->user_id = auth()->id();
        $incomes->save();
        $request->session()->flash('income', 'Income Recorded Successfully!');
        return redirect()->route('income');
        

    }

    public function deleteincome($id)
    {

        $income = Income::find($id);
        $income->delete();
        session()->flash('message', 'Income record successfully deleted');
        return redirect()->route('income');
    }

    public function editincome(Request $request)
    {
        $income = Income::find($request->id);
        $income->name = $request->name;
        $income->description = $request->description;
        $income->amount = $request->amount;
        $request->validate([
            'amount' => 'required|numeric',
        ]);
        $income->save();
        session()->flash('update', 'Income record successfully updated');
        return redirect()->route('income');
    }


}