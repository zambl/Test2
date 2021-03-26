<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    public function typeingredients()
    {
        return $this->belongsTo('App\typeingredients');
    }
    public function ingredients()
    {
        return $this->belongsTo('App\ingredients');
    }
    public function recettes()
{
    return $this->belongsToMany('App\recettes');
}
   
}
