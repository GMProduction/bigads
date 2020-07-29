<?php

namespace App\Http\Controllers\Mitra;

use App\Helper\CustomController;
use App\Models\Produk;
use Illuminate\Support\Arr;

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

    public function editForm($id){
        $user = auth()->user()->id;
        $data['iklan'] = Produk::where('user_id', $user)->where('id',$id)->first();
        if($this->request->isMethod('POST')){
            $data = [
                'nama' => $this->postField('namaweb'),
                'jenis' => $this->postField('jenisIklan'),
                'traffic' => $this->postField('trafic'),
                'ukuran' => $this->postField('ukuran'),
                'harga' => $this->postField('harga'),
                'url' => $this->postField('url'),
            ];

            if ($this->request->hasFile('screenshot')) {
                $image = $this->generateImageName('screenshot');
                $data   = Arr::add($data, 'images', $image);
                $this->uploadImage('screenshot', $image, 'iklan');
            }
            $this->update(Produk::class, $data);
            return redirect()->back()->with(['success' => 'success']);
        }

        return view('mitra.iklan.editiklan')->with($data);

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
