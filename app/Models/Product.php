<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kd_product', 'title', 'tipe', 'kategori', 'restock', 'jml_klik', 'status', 'link'
    ];

    public function tipe()
    {
        return $this->hasOne('App\Models\Tipe');
    }
}
