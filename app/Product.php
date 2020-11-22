<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //

    // public function images(){
    //     return $this->morphMany('App\Image','imageable');
    // }
    
    public function images(){
        return $this->morphMany('App\Image','imageable');
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}
