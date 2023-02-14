<?php

namespace App\Http\Controllers;


use App\Models\Income;
use App\Models\Expense;


class BudgetController extends Controller
{
    public function displayoverview()
    {
        $user = auth()->user();
        $income = Income::where('user_id', $user->id)->get()->map(function ($income) {
            $income['category'] = 'Income';
            return $income;
        });
        
    
        $expense = Expense::where('user_id', $user->id)->get()->map(function ($expense) {
            $expense['category'] = 'Expense';
            return $expense;
        });
    
        $merges = $income->concat($expense);
        $merges = $merges->sortByDesc('created_at');
        $totalincome = Income::where('user_id', $user->id)->sum('amount');
        $totalexpense = Expense::where('user_id', $user->id)->sum('amount');
        $totalbudget = $totalincome - $totalexpense;
    
        $sum = ($totalincome + $totalexpense);
        if ($sum == 0) {
            $percentageincome = 0;
            $percentageexpense = 0;
        } else {
            $percentageincome = number_format(($totalincome / $sum) * 100, 2);
            $percentageexpense = number_format(($totalexpense / $sum) * 100, 2);
        }
    
        // Store the formatted values in separate variables
        $totalincome_formatted = number_format($totalincome, 2, '.', ',');
        $totalexpense_formatted = number_format($totalexpense, 2, '.', ',');
        $totalbudget_formatted = number_format($totalbudget, 2, '.', ',');
    
        return view('dashboard.dpages.overview', compact('percentageincome', 'percentageexpense'))
                    ->with('totalincome', $totalincome)
                    ->with('totalexpense', $totalexpense)
                    ->with('totalbudget', $totalbudget)
                    ->with('totalincome_formatted', $totalincome_formatted)
                    ->with('totalexpense_formatted', $totalexpense_formatted)
                    ->with('totalbudget_formatted', $totalbudget_formatted)
                    ->with('merges', $merges);
                  
    }
    
}

