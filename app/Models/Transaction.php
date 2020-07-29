<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    protected $table = 'transactions';

    public function payment(){
        return $this->hasMany(Payment::class,'id');
    }

//    public function user(){
//        return $this->hasOneThrough(Cart::class, User::class,'id', 'user_id');
//    }


}
