<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;

class BudgetController extends Controller
{
    public function displayoverview()
    {
        $totalincome = Income::sum('amount');
        $totalexpense = Expense::sum('amount');
        $totalbudget = $totalincome - $totalexpense;
        return view('dashboard.dpages.overview')->with('totalincome', $totalincome)->with('totalexpense', $totalexpense)->with('totalbudget', $totalbudget);
    }
}