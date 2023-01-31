<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;

class GeneratePDFController extends Controller
{
    public function generatepdf()
    {

        $income = Income::all();
        $expense = Expense::all();
        $merges = $income->concat($expense);
        $data = [
            'merges' => $merges,
        ];

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('generatepdf', $data);
        return $pdf->stream('transact_history.pdf');
    }
}























// public function generatepdf()
//     {

//         $income = Income::all();
//         $expense = Expense::all();
//         $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('merges');
//         return $pdf->stream('transact_history.pdf');
//     }