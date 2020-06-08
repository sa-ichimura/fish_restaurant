<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable=['name','feature','target'];
    public function foodComponent()
    {
        return $this->hasOne('App\Model\FoodComponent');
    }
}
