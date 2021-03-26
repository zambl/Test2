<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeingredients extends Model
{
    
    public function ingredients()
    {
        return $this->hasOne('App\ingredients');
    }
}
