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
                <h2 class="mt-5 mb-5 text-center">Data per Room IPTV Maintenance</h2>
                <div class="row mb-5 justify-content-center">
                    <a href="{{url('/room')}}" class="btn btn-secondary mr-2">Back</a>
                    <a href="{{url('/room/getalliptv')}}" class="btn btn-outline-primary ml-2">Check All Data IPTV</a>
                </div>
                <table class="table table-bordered table-striped table-responsive-sm table-responsive">
                    <thead>
                    <tr>
                        <th>Room</th>
                        <th>Date</th>
                        <th>Remote</th>
                        <th>Note Remote</th>
                        <th>STB</th>
                        <th>Note STB</th>
                        <th>IR</th>
                        <th>Note IR</th>
                        <th>Power Supply</th>
                        <th>Remark</th>
                        <th>Mac Address</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $read)
                        <tr>
                            @foreach($read->iptv as $t)
                            <td>{{$read->noroom}}</td>
                            <td>{{$t->date}}</td>
                            <td>{{$t->remote}}</td>
                            <td>{{$t->noteremote}}</td>
                            <td>{{$t->stb}}</td>
                            <td>{{$t->notestb}}</td>
                            <td>{{$t->ir}}</td>
                            <td>{{$t->noteir}}</td>
                            <td>{{$t->powersupply}}</td>
                            <td>{{$t->remark}}</td>
                            <td>{{$t->macaddress}}</td>
                                <td><form action="{{url('/createiptv/delete/' . $t->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <a href="{{url('/createiptv/edit/' . $t->id)}}" class="btn btn-success mb-1">Edit</a>
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
