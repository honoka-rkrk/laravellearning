<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function routes(){
        return $this->belongsToMany('App\Models\Shop');
    }
}
