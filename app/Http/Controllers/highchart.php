<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iptvs;
use App\Rooms;

class highchart extends Controller
{
        //
        public function ichart(Request $request)
        {
                        // Start Highcart Persentage
                        $total = Iptvs::with('id')->count();
                        $totstb = Iptvs::where('stb', 'LIKE', "GOOD")->count();
                        $totrem = Iptvs::where('remote', 'LIKE', "GOOD")->count();
                        $totir = Iptvs::where('ir', 'LIKE', "GOOD")->count();
                        $percentstb = $totstb / $total * 100;
                        $percentrem = $totrem / $total * 100;
                        $percentir = $totir / $total * 100;
                        // End Highcart Persentage

                        return view('highchart', compact('percentstb', 'percentrem', 'percentir'));
                
        }

        public function ochart(Request $request)
        {
                // Start Highcart Persentage
                $total = Iptvs::with('id')->count();
                $totstb = Iptvs::where('stb', 'LIKE', "GOOD")->count();
                $totrem = Iptvs::where('remote', 'LIKE', "GOOD")->count();
                $totir = Iptvs::where('ir', 'LIKE', "GOOD")->count();
                $percentstb = $totstb / $total * 100;
                $percentrem = $totrem / $total * 100;
                $percentir = $totir / $total * 100;
                // End Highcart Persentage

                return view('highchart', compact('percentstb', 'percentrem', 'percentir'));
        }
}
