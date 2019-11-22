@extends('master.master')
@section('title', 'Check Data Maintenance')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <div class="container align-center">
                    <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png" alt="Watermark & SPA Hotel Bali" class="mx-auto d-block" width="200px">
            </div>
            <div class="container">
                <h2 class="mt-5 mb-5 text-center">Data IPTV Maintenance</h2>
                <a href="{{url('/room')}}" class="btn btn-secondary mb-5">Back</a>
                <table class="table table-bordered table-striped table-responsive-sm">
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
                            <td><a href="{{url('/room')}}" class="btn btn-successp mb-5">Edit</a></td>
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
