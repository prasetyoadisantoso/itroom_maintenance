<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onities extends Model
{
    //
    protected $fillable = ['rooms_id',"date", 'cable', 'notecable', 'dnd', 'notednd', 'bel', 'notebel', 'keytag', 'notekeytag', 'reader', 'notereader', 'safetybox', 'notesafetybox', 'remark'   ];
    public function onities(){
        return $this->belongsTo('App\Rooms');
    }
}
