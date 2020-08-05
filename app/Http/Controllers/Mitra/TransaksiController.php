<?php

namespace App\Http\Controllers\Mitra;

use App\Helper\CustomController;
use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Support\Arr;

/**
 * Class TransaksiController
 * @package App\Http\Controllers\Admin
 */
class TransaksiController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user      = auth()->user()->id;
        $transaksi = Transaction::with(['payment.vendor', 'produk', 'user'])->whereHas(
            'produk',
            function ($query) use ($user) {
                return $query->where('user_id', $user);
            }
        )->get();

//        return $transaksi->toArray();
        return view('mitra.transaksi.transaksi')->with(['transaksi' => $transaksi]);
    }

    public function detail($id)
    {
        $transaksi = Transaction::where('id', $id)->with(['cart.user.profile', 'payment.vendor', 'cart.product'])->first();
//        return $transaksi->toArray();
        if ($this->request->isMethod('POST')) {
            $data = [
                'status' => $this->postField('status'),
            ];
            if ($this->request->get('action') == 'payment') {
                if ($this->request->get('alasan') !== null) {
                    $data = Arr::add($data, 'description', $this->postField('alasan'));
                }
                $this->update(Payment::class, $data);

                return redirect()->back()->with(['success' => 'success']);
            } else {
                $this->update(Transaction::class, $data);

                return redirect()->back()->with(['success' => 'success']);
            }
        }

        return view('admin.transaksi.detailTransaksi')->with(['transaksi' => $transaksi]);
    }
}
