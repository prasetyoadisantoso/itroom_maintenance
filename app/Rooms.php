<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //

    public function iptv(){
        return $this->hasMany('App\Iptvs');
    }

    public function onity(){
        return $this->hasMany('App\Onities');
    }

}
