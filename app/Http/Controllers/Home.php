<?php

namespace App\Http\Controllers;

use App\Iptvs;
use App\Rooms;
use Illuminate\Http\Request;

class Home extends Controller
{
    //
    public function room(){
        $rooms = Rooms::all();
//        var_dump($rooms);
//        dd($rooms);
        return view('rooms', ['rooms' => $rooms]);
    }
}
