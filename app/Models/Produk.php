<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'products';

    public function transaksi(){
        return $this->hasMany(Transaction::class, 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
