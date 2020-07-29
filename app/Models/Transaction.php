<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    protected $table = 'transactions';

    public function payment(){
        return $this->hasMany(Payment::class,'transactions_id');
    }

    public function lastPayment(){
        return $this->hasMany(Payment::class,'transactions_id')->latest('id');
    }

    public function produk(){
        return $this->belongsTo(Produk::class, 'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
