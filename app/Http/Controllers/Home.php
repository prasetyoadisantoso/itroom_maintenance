<?php

namespace App\Http\Controllers;



use App\Exports\OnityExport;
use App\Iptvs;
use App\Onities;
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


        // Start Highcart Persentage
        $total = Iptvs::with('id')->count();
        $totstb = Iptvs::where('stb', 'LIKE', "GOOD")->count();
        $totrem = Iptvs::where('remote', 'LIKE', "GOOD")->count();
        $totir = Iptvs::where('ir', 'LIKE', "GOOD")->count();
        $percentstb = $totstb / $total * 100;
        $percentrem = $totrem / $total * 100;
        $percentir = $totir / $total * 100;
        // End Highcart Persentage

        if ($request->page == 1) {
            $room1 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room1], compact('percentstb', 'percentrem', 'percentir'));
        } elseif ($request->page == 2) {
            $room2 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room2], compact('percentstb', 'percentrem', 'percentir'));
        } elseif ($request->page == 3) {
            $room3 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room3], compact('percentstb', 'percentrem', 'percentir'));
        } elseif ($request->page == 4) {
            $room4 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room4], compact('percentstb', 'percentrem', 'percentir'));
        } elseif ($request->page == 5) {
            $room5 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv', ['rooms' => $room5], compact('percentstb', 'percentrem', 'percentir'));
        } elseif ($request->page != 5) {
            $rooms = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getalliptv',  ['rooms' => $rooms], compact('percentstb', 'percentrem', 'percentir'));
        }
    }

    public function getAllOnity(Request $request)
    {
         // Start Highcart Persentage
         $total = Onities::with('id')->count();
         $totcab = Onities::where('cable', 'LIKE', "GOOD")->count();
         $totdnd = Onities::where('dnd', 'LIKE', "GOOD")->count();
         $totbel = Onities::where('bel', 'LIKE', "GOOD")->count();
         $totkey = Onities::where('keytag', 'LIKE', "GOOD")->count();
         $totread = Onities::where('reader', 'LIKE', "GOOD")->count();
         $totsfb = Onities::where('safetybox', 'LIKE', "GOOD")->count();
         $percentcab = $totcab / $total * 100;
         $percentdnd = $totdnd / $total * 100;
         $percentbel = $totbel / $total * 100;
         $percentkey = $totkey / $total * 100;
         $percentread = $totread / $total * 100;
         $percentsfb = $totsfb / $total * 100;
         // End Highcart Persentage
        if ($request->page == 1) {
            $room1 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room1],  compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        } elseif ($request->page == 2) {
            $room2 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room2],  compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        } elseif ($request->page == 3) {
            $room3 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room3],  compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        } elseif ($request->page == 4) {
            $room4 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room4],  compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        } elseif ($request->page == 5) {
            $room5 = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $room5],  compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        } elseif ($request->page != 5) {
            $rooms = Rooms::where('floor', 'LIKE', "%$request->page%")->get();
            return view('getallonity', ['rooms' => $rooms],  compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        }

    }


    public function search(Request $request)
    {
        $rooms = Rooms::when($request->q, function ($query) use ($request) {
            $query->where('noroom', 'LIKE', "%{$request->q}%")
                ->orWhere('id', 'LIKE', "%{$request->q}%");
        })->paginate(10);

        // Start Highcart Persentage
        $total = Iptvs::with('id')->count();
        $totstb = Iptvs::where('stb', 'LIKE', "GOOD")->count();
        $totrem = Iptvs::where('remote', 'LIKE', "GOOD")->count();
        $totir = Iptvs::where('ir', 'LIKE', "GOOD")->count();
        $percentstb = $totstb / $total * 100;
        $percentrem = $totrem / $total * 100;
        $percentir = $totir / $total * 100;
        // End Highcart Persentage


        return view('getalliptv', ['rooms' => $rooms], compact('percentstb', 'percentrem', 'percentir'));
    }

    public function searchonity(Request $request)
    {

        $rooms = Rooms::when($request->q, function ($query) use ($request) {
            $query->where('noroom', 'LIKE', "%{$request->q}%")
                ->orWhere('id', 'LIKE', "%{$request->q}%");
        })->paginate(10);

        // Start Highcart Persentage
        $total = Onities::with('id')->count();
        $totcab = Onities::where('cable', 'LIKE', "GOOD")->count();
        $totdnd = Onities::where('dnd', 'LIKE', "GOOD")->count();
        $totbel = Onities::where('bel', 'LIKE', "GOOD")->count();
        $totkey = Onities::where('keytag', 'LIKE', "GOOD")->count();
        $totread = Onities::where('reader', 'LIKE', "GOOD")->count();
        $totsfb = Onities::where('safetybox', 'LIKE', "GOOD")->count();
        $percentcab = $totcab / $total * 100;
        $percentdnd = $totdnd / $total * 100;
        $percentbel = $totbel / $total * 100;
        $percentkey = $totkey / $total * 100;
        $percentread = $totread / $total * 100;
        $percentsfb = $totsfb / $total * 100;
        // End Highcart Persentage

        return view('getallonity', ['rooms' => $rooms], compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
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

}
