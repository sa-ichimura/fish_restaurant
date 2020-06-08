<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FoodComponent extends Model
{
    //
    public function food()
    {
        return $this->hasOne('App\Model\Food');
    }
}
