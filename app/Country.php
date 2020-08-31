<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public function province()
  {
      return $this->hasMany(Province::class);
  } 
}
