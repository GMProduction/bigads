<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends CustomController
{
    //
    /**
     * TransactionController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function cartPage($id)
    {
        $transactions = Transaction::with('product')->where('id', '=', $id)->where('user_id', '=', auth()->id())->get();
        return view('cart')->with(['transactions' => $transactions]);
    }
}
