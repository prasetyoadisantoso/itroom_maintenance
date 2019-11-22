<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iptvs extends Model
{
    //
    public function iptvs(){
        return $this->belongsTo('App\Rooms');
    }
}
