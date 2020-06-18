@extends('master.master')
@section('title', 'Check Data Maintenance')

@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
@endif

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="container align-center">
                    <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png" alt="Watermark & SPA Hotel Bali" class="mx-auto d-block" width="200px">
                </div>
                <div class="container">
                    <h2 class="mt-5 mb-5 text-center">Data Per-Room ONITY Maintenance</h2>
                    <div class="row mb-5 justify-content-center">
                    <a href="{{url('/room')}}" class="btn btn-secondary mr-2">Back</a>
                    <a href="{{url('/room/getallonity')}}" class="btn btn-outline-primary ml-2">Check All Data ONITY</a>
                    </div>
                        <table class="table table-bordered table-striped table-responsive-sm table-responsive">
                        <thead>
                        <tr>
                            <th>Room</th>
                            <th>Date</th>
                            <th>Cable</th>
                            <th>Note Cable</th>
                            <th>DND</th>
                            <th>Note DND</th>
                            <th>BEL</th>
                            <th>Note BEL</th>
                            <th>Keytag</th>
                            <th>Note Keytag</th>
                            <th>Reader</th>
                            <th>Note Reader</th>
                            <th>Safety Box</th>
                            <th>Note Safety Boxr</th>
                            <th>Remark</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $read)
                            <tr>
                                @foreach($read->onity as $t)
                                    <td>{{$read->noroom}}</td>
                                    <td>{{$t->date}}</td>
                                    <td>{{$t->cable}}</td>
                                    <td>{{$t->notecable}}</td>
                                    <td>{{$t->dnd}}</td>
                                    <td>{{$t->notednd}}</td>
                                    <td>{{$t->bel}}</td>
                                    <td>{{$t->notebel}}</td>
                                    <td>{{$t->keytag}}</td>
                                    <td>{{$t->notekeytag}}</td>
                                    <td>{{$t->reader}}</td>
                                    <td>{{$t->notereader}}</td>
                                    <td>{{$t->safetybox}}</td>
                                    <td>{{$t->notesafetybox}}</td>
                                    <td>{{$t->remark}}</td>
                                    <td><form action="{{url('/createonity/delete/' . $t->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{url('/createonity/edit/' . $t->id)}}" class="btn btn-success mb-1">Edit</a>
                                            {{-- <a href="addnote/delete/{{$item->id}}">Delete{{$item->id}}</a> --}}
                                            <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>

            </div>
        </div>
    </div>
@endsection
