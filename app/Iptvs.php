<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iptvs extends Model
{
    //
    protected $fillable = ['rooms_id',"date", 'remote', 'noteremote', 'stb', 'notestb', 'ir', 'noteir', 'powersupply', 'remark', 'macaddress'];
    public function iptvs(){
        return $this->belongsTo('App\Rooms');
    }


}
