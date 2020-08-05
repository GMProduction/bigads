<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataTransaksi(Request $request)
    {
        $awal = $request->get('awal');
        $akhir = $request->get('akhir');
        $transaksi = Transaction::whereBetween('created_at',[$awal,$akhir])->with(['lastPayment','produk','user'])->get();
        $data['awal'] = $awal;
        $data['akhir'] = $akhir;
        $data['transaksi'] = $transaksi;
        return view('admin.transaksi.cetak')->with($data);
    }

    public function cetakAdminDataTransaksi(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataTransaksi($request));
        return $pdf->stream();
//        return $this->adminDataTransaksi($request);
    }

    public function adminDataMitra(Request $request)
    {
        $mitra = User::where('roles','mitra')->get();
        return view('admin.mitra.cetak')->with(['mitra' => $mitra]);
    }

    public function cetakAdminDataMitra(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataMitra($request));
        return $pdf->stream();
//        return $this->adminDataMitra($request);
    }

    public function userDataTransaksi(Request $request)
    {
//        $caridata = $request->caridata;
//        $status = $request->status;
//        $mitra = mitraModel::where('status', 'LIKE', '%' . $status . '%')
//            ->where(function ($q) use ($caridata) {
//                $q->where('username', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('email', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('noHp', 'LIKE', '%' . $caridata . '%')
//                    ->orwhere('alamat', 'LIKE', '%' . $caridata . '%');
//            })
//            ->get();
        return view('user.transaksi.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakuserDataTransaksi(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataMitra($request))->setPaper('b4', 'landscape');
        return $pdf->stream();
    }


}
