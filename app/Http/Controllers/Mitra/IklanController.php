<?php

namespace App\Http\Controllers\Mitra;

use App\Helper\CustomController;
use App\Models\Produk;

class IklanController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $user = auth()->user()->id;
        $data['iklan'] = Produk::where('user_id', $user)->get();
//        return $produk->toArray();
        return view('mitra.iklan.iklan')->with($data);
    }

    public function addForm(){
        $image = $this->generateImageName('screenshot');
        $user = auth()->user()->id;
        $data = [
            'nama' => $this->postField('namaweb'),
            'jenis' => $this->postField('jenisIklan'),
            'traffic' => $this->postField('trafic'),
            'ukuran' => $this->postField('ukuran'),
            'harga' => $this->postField('harga'),
            'url' => $this->postField('url'),
            'images' => $image,
            'user_id' => $user
        ];
        $this->uploadImage('screenshot', $image, 'iklan');
        $this->insert(Produk::class, $data);
        return redirect()->back()->with(['success' => 'success']);
    }
}
