<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
  protected  $fillable = [
    'name'
  ];

  public function product()
  {
    return $this->belongsTo('App\Model\Product');
  }
}
