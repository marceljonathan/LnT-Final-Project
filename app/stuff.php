<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stuff extends Model
{
    protected $fillable = [
        'kategori', 'nama', 'harga', 'jumlah'
    ];
}
