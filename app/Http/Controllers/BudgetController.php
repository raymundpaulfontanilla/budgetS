<?php

namespace App\Http\Controllers;


use App\Models\Income;
use App\Models\Expense;

class BudgetController extends Controller
{
    public function displayoverview()
    {
        // $tableincome = Income::all();
        // $tableexpense =Expense::all();
        // $mergetables = $tableincome->unionAll($tableexpense);
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
        ->with('totalbudget', $totalbudget);
        // ->with('mergetables',$mergetables);

    
       
     
       
    }
}