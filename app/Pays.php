<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    public function menus()
{
    return $this->hasMany('App\Menus');
}
}
