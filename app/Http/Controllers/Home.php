<?php

namespace App\Http\Controllers;



use App\Iptvs;
use App\Rooms;
use Illuminate\Http\Request;



class Home extends Controller
{
    //
    public function room()
    {
        #code
        $rooms = Rooms::all();
        $this->room = $rooms;
        return view('rooms', ['rooms' => $rooms]);
    }


    public function getRoom($id){
        // $rooms = Rooms::find($id);
        $rooms = Rooms::where('id', '=', $id)->get();
        // dd($rooms);
        // var_dump($rooms);
        return view('read.read_iptv', compact('rooms'));
    }
}
