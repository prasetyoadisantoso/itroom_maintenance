<?php

namespace App\Http\Controllers;

use App\Onities;
use Illuminate\Http\Request;

class OnityController extends Controller
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
        return view('control.create_onity');
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
            'cable' => 'required',
            'bel' => 'required',
            'keytag' => 'required',
            'reader' => 'required',
            'safetybox' => 'required'
        ]);

        $onities = new Onities([
            'rooms_id' => $request->get('rooms_id'),
            'date' => $request->get('date'),
            'cable' => $request->get('cable'),
            'notecable' => $request->get('notecable'),
            'dnd' => $request->get('dnd'),
            'notednd' => $request->get('notednd'),
            'bel' => $request->get('bel'),
            'notebel' => $request->get('notebel'),
            'keytag' => $request->get('keytag'),
            'notekeytag' => $request->get('notekeytag'),
            'reader' => $request->get('reader'),
            'notereader' => $request->get('notereader'),
            'safetybox' => $request->get('safetybox'),
            'notesafetybox' => $request->get('notesafetybox'),
            'remark' => $request->get('remark'),
        ]);

        $onities->save();
        return redirect('/room2/' . $request->rooms_id)->with('success', 'Data ditambahkan');



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
        $rooms = Onities::where('id', '=', $id)->get();

        return view('control.edit_onity', compact('rooms'));
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
            'cable' => 'required',
            'bel' => 'required',
            'keytag' => 'required',
            'reader' => 'required',
            'safetybox' => 'required'
        ]);


        $room = Onities::find($id);
        $room->date = $request->date;
        $room->rooms_id = $request->rooms_id;
        $room->cable = $request->cable;
        $room->notecable = $request->notecable;
        $room->dnd = $request->dnd;
        $room->notednd = $request->notednd;
        $room->bel = $request->bel;
        $room->notebel = $request->notebel;
        $room->keytag = $request->keytag;
        $room->notekeytag = $request->notekeytag;
        $room->reader = $request->reader;
        $room->notereader = $request->notereader;
        $room->safetybox = $request->safetybox;
        $room->notesafetybox = $request->notesafetybox;
        $room->remark = $request->remark;
        $room->save();

        return redirect('/room2/' . $room->rooms_id);
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
        $room = Onities::find($id);
        $room->delete();
        return redirect('/room2/' . $room->rooms_id);
    }
}
