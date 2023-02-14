<?php

namespace App\Http\Controllers;

use Mailgun\Mailgun;
use App\Models\Income;
use App\Models\Expense;

class SendEmailController extends Controller
{
    public function sendemail()
    {
        $user = auth()->user();
        $income = Income::where('user_id', $user->id)->get();
        $expense = Expense::where('user_id', $user->id)->get();
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
            'subject' => 'Transaction History',
            'text' => $text
        ]);

        session()->flash('success', 'Email sent successfully!');
        return redirect()->route('transactionhistory');
    }
}