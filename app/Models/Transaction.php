<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function product()
    {
        return $this->belongsTo(Produk::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
