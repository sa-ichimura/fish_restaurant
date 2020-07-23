<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comparison extends Model
{
    //
    Public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function food()
    {
        return $this->belongsTo('App\Model\Food');
    }
}
