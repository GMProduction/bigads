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

}
