<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iptvs;
use App\Onities;

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

                return view('highchart-iptv', compact('percentstb', 'percentrem', 'percentir'));
        }

        public function ochart(Request $request)
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

                return view('highchart-onity', compact('percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        }


        public function rchart(Request $request)
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

                return view('highchart-room', compact('percentstb', 'percentrem', 'percentir','percentcab', 'percentdnd', 'percentbel', 'percentkey', 'percentread', 'percentsfb'));
        }
}
