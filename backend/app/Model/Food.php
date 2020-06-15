<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable=['name','feature','target'];
    public function foodComponent()
    {
        return $this->hasOne(FoodComponent::class);
    }

    public function foodCategory()
    {
        return $this->belongsToMany(FoodCategory::class);
    }
}
