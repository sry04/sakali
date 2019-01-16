<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spesification extends Model
{
  protected $fillable = [
      'name'
  ];

  public function product()
  {
      return $this->hasOne('App\Models\Product');

  }
}