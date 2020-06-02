<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    public function foodComponent()
    {
        return $this->hasOne('App\Model\FoodComponent')
    }
}
