<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    
    public function pays()
    {
        return $this->belongsTo('App\pays');
    }
    public function recettes()
{
    return $this->belongsToMany('App\recettes');
}
public function photos()
{
    return $this->belongsTo('App\Photo');
}

}


