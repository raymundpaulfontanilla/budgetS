<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function displayincome()
    {
        $january = Income::whereRaw("MONTH(created_at) = 1")->sum('amount');
        $february = Income::whereRaw("MONTH(created_at) = 2")->sum('amount');
        $march = Income::whereRaw("MONTH(created_at) = 3")->sum('amount');
        $april = Income::whereRaw("MONTH(created_at) = 4")->sum('amount');
        $may = Income::whereRaw("MONTH(created_at) = 5")->sum('amount');
        $june = Income::whereRaw("MONTH(created_at) = 6")->sum('amount');
        $july = Income::whereRaw("MONTH(created_at) = 7")->sum('amount');
        $august = Income::whereRaw("MONTH(created_at) = 8")->sum('amount');
        $september = Income::whereRaw("MONTH(created_at) = 9")->sum('amount');
        $october = Income::whereRaw("MONTH(created_at) = 10")->sum('amount');
        $november = Income::whereRaw("MONTH(created_at) = 11")->sum('amount');
        $december = Income::whereRaw("MONTH(created_at) = 12")->sum('amount');
        $monday = Income::whereRaw("WEEKDAY(created_at) = 0")->sum('amount');
        $tuesday = Income::whereRaw("WEEKDAY(created_at) = 1")->sum('amount');
        $wednesday = Income::whereRaw("WEEKDAY(created_at) = 2")->sum('amount');
        $thursday = Income::whereRaw("WEEKDAY(created_at) = 3")->sum('amount');
        $friday = Income::whereRaw("WEEKDAY(created_at) = 4")->sum('amount');
        $saturday = Income::whereRaw("WEEKDAY(created_at) = 5")->sum('amount');
        $sunday = Income::whereRaw("WEEKDAY(created_at) = 6")->sum('amount');
        return view('dashboard.dpages.income', compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday','january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'))
            ->with('incomes', Income::orderByDesc('created_at')->get())
            ->with('totalincome', Income::sum('amount'));

    }

    public function createincome(Request $request)
    {
        $incomes = new Income;
        $incomes->name = $request->name;
        $incomes->description = $request->description;
        $incomes->amount = $request->amount;
        $request->validate([
            'amount' => 'numeric',
        ]);
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

    public function editincome(Request $request){
        $income = Income::find($request->id);
        $income->name = $request->name;
        $income->description = $request->description;
        $income->amount = $request->amount;
        $income->save();
        return redirect()->route('income');
    }


}