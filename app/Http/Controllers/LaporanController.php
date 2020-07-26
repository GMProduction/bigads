<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataTransaksi(Request $request)
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
        return view('admin.transaksi.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakAdminDataTransaksi(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataTransaksi($request));
        return $pdf->stream();
    }

    public function adminDataMitra(Request $request)
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
        return view('admin.mitra.cetak')->with(['mitra' => "datanya"]);
    }

    public function cetakAdminDataMitra(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataMitra($request));
        return $pdf->stream();
    }

}
