<?php

namespace App\Http\Controllers;

use Mailgun\Mailgun;
use App\Models\Income;
use App\Models\Expense;

class SendEmailController extends Controller
{
    public function sendemail()
    {
        $income = Income::all();
        $expense = Expense::all();
        $merges = $income->concat($expense);
        $data = [
            'merges' => $merges->toArray(),
        ];
        $mg = Mailgun::create(env('MAIL_APIKEY'));

        $text = "Hello, here's the data you requested: \n";
        foreach ($data['merges'] as $merge) {
            $text .= "\n";
            foreach ($merge as $key => $value) {
                $text .= "$key: $value\n";
            }
        }
        $mg->messages()->send(env('MAIL_DOMAIN'), [
            'from' => 'postmaster@sandbox3d05338cfcae48edb1ee45445211e682.mailgun.org',
            'to' => 'raymundpaulfontanilla@gmail.com',
            'subject' => 'The PHP SDK is awesome!',
            'text' => $text
        ]);
        return redirect()->route('transactionhistory');
    }
}