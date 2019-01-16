<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kd_product', 'title', 'tipe', 'kategori', 'restock', 'jml_klik', 'status', 'link'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function tipe()
    {
        return $this->belongsTo('App\Models\Tipe');
    }
}
