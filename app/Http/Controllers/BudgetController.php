<?php

namespace App\Http\Controllers;


use App\Models\Income;
use App\Models\Expense;
use Illuminate\Support\Facades\DB;

class BudgetController extends Controller
{
    public function displayoverview()
    {
      
        $income = Income::all();;
        $expense = Expense::all();
        $merges = $income->concat($expense);
        $totalincome = Income::sum('amount');
        $totalexpense = Expense::sum('amount');
        $totalbudget = $totalincome - $totalexpense;
        $sum= ($totalincome + $totalexpense);
        if ($sum == 0) {
            $percentageincome = 0;    
            $percentageexpense = 0;
        } else {
            $percentageincome = ($totalincome/$sum) * 100;
            $percentageexpense = ($totalexpense / $sum) * 100;
        }
        return view('dashboard.dpages.overview',compact('percentageincome','percentageexpense','totalincome','totalexpense'))
        ->with('totalincome', $totalincome)
        ->with('totalexpense', $totalexpense)
        ->with('totalbudget', $totalbudget)
        ->with('merges',$merges);
       
           
    }
}