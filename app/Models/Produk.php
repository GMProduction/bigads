<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'products';

    public function transaksi(){
        return $this->hasMany(Transaction::class);
    }
}
