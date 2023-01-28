<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
   public function createincome(Request $request){
    $incomes=new Income;
    $incomes->name = $request ->name;
    $incomes->desciption = $request ->desciption;
    $incomes->amount = $request ->amount;
    $incomes->save();

   }
}
