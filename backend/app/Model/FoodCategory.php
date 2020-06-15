<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $fillable=['name'];
    public function fishCategory()
    {
        return $this->belongTo(FishCategory::class);
    }
    public function foods()
    {
        return $this->belongsToMany('App\Model\Food');
    }
}

