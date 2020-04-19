<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Review;

class Business extends Model
{


    protected $guarded =[];

     protected $casts = [
        'category_id' => 'array',
        'feature_image'=>'array'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
   
}
