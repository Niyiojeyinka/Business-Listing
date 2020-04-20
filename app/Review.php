<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    
public function business(Type $var = null)
{
   return $this->belongsTo(App\business::class);
}
}
