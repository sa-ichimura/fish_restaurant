<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class FishCategory extends Model
{
    protected $fillable=['name'];
    public function foodCategory()
    {
        return $this->hasMany(FoodCategory::class);
    }
}
