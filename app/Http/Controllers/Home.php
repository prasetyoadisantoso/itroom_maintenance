<?php

namespace App\Http\Controllers;



use App\Exports\OnityExport;
use App\Iptvs;

use App\Rooms;
use Illuminate\Http\Request;
use Excel;
use App\Exports\Export;



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


    public function getRoom($id)
    {

        $rooms = Rooms::where('id', '=', $id)->get();
        return view('read.read_iptv', compact('rooms'));
    }

    public function getRoom2($id)
    {

        $rooms = Rooms::where('id', '=', $id)->get();
        return view('read.read_onity', compact('rooms'));
    }

    public function getAllIptv(Request $request)
    {
        #code dont erase
        //$rooms = Rooms::paginate(40);
        //$this->room = $rooms;
        //return view('getalliptv', ['rooms' => $rooms]);

        if ($request->page == 1) {
            $room1 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room1]);
        } elseif ($request->page == 2) {
            $room2 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room2]);
        } elseif ($request->page == 3) {
            $room3 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room3]);
        } elseif ($request->page == 4) {
            $room4 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room4]);
        } elseif ($request->page == 5) {
            $room5 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room5]);
        } elseif ($request->page != 5) {
            $rooms = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            
            // Start Highcart Persentage
            $total = Iptvs::with('id')->count();
            $totstb = Iptvs::where('stb', 'LIKE', "GOOD")->count();
            $totrem = Iptvs::where('remote', 'LIKE', "GOOD")->count();
            $totir = Iptvs::where('ir', 'LIKE', "GOOD")->count();
            $percentstb = $totstb / $total * 100;
            $percentrem = $totrem / $total * 100;
            $percentir = $totir / $total * 100;
            // End Highcart Persentage
            
            return view('getalliptv',  ['rooms' => $rooms], compact('percentstb', 'percentrem', 'percentir'));
        }
    }

    public function getAllOnity(Request $request)
    {
        #code
        //        $rooms = Rooms::paginate(40);

        //        $room1 = Rooms::where('floor', 'LIKE', 1)->paginate(30);
        //        dd($room1);
        //        $room1 = Rooms::paginate(30);
        //        dd($request->page);
        if ($request->page == 1) {
            $room1 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room1]);
        } elseif ($request->page == 2) {
            $room2 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room2]);
        } elseif ($request->page == 3) {
            $room3 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room3]);
        } elseif ($request->page == 4) {
            $room4 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room4]);
        } elseif ($request->page == 5) {
            $room5 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room5]);
        } elseif ($request->page != 5) {
            $rooms = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $rooms]);
        }


        //        if ( $currents = 1){
        //            $rooms = Rooms::where('floor', 'LIKE', 2)->paginate(4);
        //            return view('getallonity', ['rooms' => $rooms]);
        //        }


        //        dd($rooms);

    }


    public function search(Request $request)
    {

        $rooms = Rooms::when($request->q, function ($query) use ($request) {
            $query->where('noroom', 'LIKE', "%{$request->q}%")
                ->orWhere('id', 'LIKE', "%{$request->q}%");
        })->paginate(10);
        return view('getalliptv', ['rooms' => $rooms]);
    }

    public function searchonity(Request $request)
    {

        $rooms = Rooms::when($request->q, function ($query) use ($request) {
            $query->where('noroom', 'LIKE', "%{$request->q}%")
                ->orWhere('id', 'LIKE', "%{$request->q}%");
        })->paginate(10);
        return view('getallonity', ['rooms' => $rooms]);
    }


    public function searchrooms(Request $request)
    {

        $rooms = Rooms::when($request->q, function ($query) use ($request) {
            $query->where('noroom', 'LIKE', "%{$request->q}%")
                ->orWhere('id', 'LIKE', "%{$request->q}%");
        })->paginate(153);
        return view('rooms', ['rooms' => $rooms]);
    }



    public function laporanExcel()
    {
        return Excel::download(new Export, 'Data Maintenance IPTV.xlsx');
    }

    public function laporanExcel2()
    {
        return Excel::download(new OnityExport, 'Data Maintenance Onity.xlsx');
    }



    //     $rooms = Rooms::where('id', '=', $id)->get();
    //             return view('read.read_iptv', compact('rooms'));
    // }

}
