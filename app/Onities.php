<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onities extends Model
{
    //
    public function onity(){
        return $this->belongsTo('App\Rooms');
    }
}
