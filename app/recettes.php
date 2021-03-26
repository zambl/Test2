<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recettes extends Model
{
    public function menus()
    {
        return $this->belongsToMany('App\menus');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\ingredients');
    }

}
