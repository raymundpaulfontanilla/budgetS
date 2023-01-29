<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    public function displayincome()
    {
        return view('dashboard.dpages.income')
            ->with('incomes', Income::orderByDesc('created_at')->get())
            ->with('totalincome', Income::sum('amount'));
    }

    public function createincome(Request $request)
    {
        $incomes = new Income;
        $incomes->name = $request->name;
        $incomes->description = $request->description;
        $incomes->amount = $request->amount;
        $incomes->save();

        return redirect()->route('income');

    }

    public function deleteincome($id)
    {
        $income = Income::find($id);
        $income->delete();
        return redirect()->route('income');
    }
}