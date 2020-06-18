<?php

namespace App\Exports;
use App\Rooms;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OnityExport implements FromView
{

    /**
     * @return View
     */
    public function view(): View
    {
        // TODO: Implement view() method.
        return view('getviewonity', [
            'rooms' => Rooms::all()
        ]);
    }
}
