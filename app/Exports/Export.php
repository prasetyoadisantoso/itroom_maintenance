<?php

namespace App\Exports;
use Illuminate\Database\Eloquent\Model;
use App\Iptvs;
use App\Rooms;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Export implements FromView
{

    /**
     * @return View
     */
    public function view(): View
    {
        // TODO: Implement view() method.
        return view('getviewiptv', [
            'rooms' => Rooms::all()
        ]);
    }
}
