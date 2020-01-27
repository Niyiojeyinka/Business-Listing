<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Business;

class Category extends Model
{
    //
   protected $guarded =[];
  
    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }
}
