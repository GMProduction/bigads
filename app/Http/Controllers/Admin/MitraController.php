<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\User;

class MitraController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $mitra = User::where('roles','mitra')->get();
        return view('admin.mitra.mitra')->with(['mitra' => $mitra]);
    }

    public function hapus($id)
    {
        try {
            User::destroy($id);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
