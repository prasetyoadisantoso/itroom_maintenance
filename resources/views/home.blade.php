@extends('master.master')
@section('title', 'Welcome Home')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <div class="container align-center">
                <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png" alt="Watermark & SPA Hotel Bali" class="mx-auto d-block" width="200px">
            </div>

            {{-- <h3 class="text-center"><a href="#">Watermark IT Maintenance</a></h3>
            <h5 class="text-center my-4">Eloquent One To Many Relationship</h5> --}}
            <div class="container">
                <h2 class="text-center mt-5 mb-5">Home</h2>
                <table class="table table-bordered table-striped text-center" >
                    <thead>
                    <tr>
                        <th>No Room</th>
                        <th>Operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($home as $a)
                        <tr>
                            <td>{{$a->noroom}}</td>
                            <td><a href="{{url('/createiptv')}}" class="btn btn-primary">OPEN</a></td>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
