<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
public function users()
{
    return $this->belongstoMany(User::class);
}
}
