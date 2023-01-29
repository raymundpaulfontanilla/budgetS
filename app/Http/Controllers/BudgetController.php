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
        return view('dashboard.dpages.overview')
        ->with('totalincome', $totalincome)
        ->with('totalexpense', $totalexpense)
        ->with('totalbudget', $totalbudget);
        // ->with('mergetables',$mergetables);
    
       
    }
}