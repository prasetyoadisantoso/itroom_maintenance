<?php

namespace App\Http\Controllers;

use App\Iptvs;
use App\Rooms;
use Illuminate\Http\Request;

class IptvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('control.create_iptv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'date' => 'required',
            'remote' => 'required',
            'stb' => 'required',
            'ir' => 'required',
            'powersupply' => 'required',
            'macaddress' => 'required'
        ]);

        $iptvs = new Iptvs([
                'rooms_id' => $request->get('rooms_id'),
                'date' => $request->get('date'),
                'remote' => $request->get('remote'),
                'noteremote' => $request->get('noteremote'),
                'stb' => $request->get('stb'),
                'notestb' => $request->get('notestb'),
                'ir' => $request->get('ir'),
                'noteir' => $request->get('noteir'),
                'powersupply' => $request->get('powersupply'),
                'remark' => $request->get('remark'),
                'macaddress' => $request->get('macaddress'),
            ]);

        $iptvs->save();
        return redirect('/room/' . $request->rooms_id)->with('success', 'Data ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rooms = Iptvs::where('id', '=', $id)->get();

        return view('control.edit_iptv', compact('rooms'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'date' => 'required',
            'remote' => 'required',
            'stb' => 'required',
            'ir' => 'required',
            'powersupply' => 'required',
            'macaddress' => 'required'
        ]);


        $room = Iptvs::find($id);
        $room->date = $request->date;
        $room->rooms_id = $request->rooms_id;
        $room->remote = $request->remote;
        $room->noteremote = $request->noteremote;
        $room->stb = $request->stb;
        $room->notestb = $request->notestb;
        $room->ir = $request->ir;
        $room->noteir = $request->noteir;
        $room->powersupply = $request->powersupply;
        $room->remark = $request->remark;
        $room->macaddress = $request->macaddress;
        $room->save();

        return redirect('/room/' . $room->rooms_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $room = Iptvs::find($id);
        $room->delete();
        return redirect('/room/' . $room->rooms_id);
    }
}
