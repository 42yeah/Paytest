<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        return view('pages.pay');
    }

    public function paypost(Request $request)
    {
        $this->validate($request, [
            'WIDsubject' => 'required',
            'WIDtotal_amount' => 'required',
        ]);

        $datas = [
            'WIDout_trade_no' => str_random(20),
            'WIDsubject' => $request->post('WIDsubject'),
            'WIDtotal_amount' => $request->post('WIDtotal_amount'),
            'WIDbody' => $request->post('WIDbody')
        ];

        return view('pages.pay', compact('datas'));
    }

    public function paid(Request $request)
    {
        return view('layouts.paid');
    }
}
