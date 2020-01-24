<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $guarded =[];

    public function categories(){

    	$this->hasMany(Category::class);
    }
}
