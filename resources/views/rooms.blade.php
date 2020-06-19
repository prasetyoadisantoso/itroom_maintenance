@extends('master.master')
@section('title', 'Room List')
@section('content')

{{-- NAVBAR Administrator --}}
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            IT Admin Watermark
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-group">
            <div class="container align-center">
                    <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png" alt="Watermark & SPA Hotel Bali" class="mx-auto my-5 d-block" width="200px">
            </div>
            <div class="container">
                <h2 class="text-center mb-3">Maintenance Rooms for IT Support Watermark </h2>
                <p class="text-center mb-5 mx-5">All IPTV and ONITY conditions are recorded in this Software. The latest release software. Made specifically for Watermark Hotel & SPA. Copyright by Prasetyo Adi Santoso</p>
                <div class="row justify-content-center">
                    <a href="{{url('/createiptv')}}" class="btn btn-outline-info m-2 align-content-center">Add Data IPTV</a>
                    <a href="{{url('/room/getalliptv')}}" class="btn btn-outline-info m-2 align-content-center">Check All Data IPTV</a>
                </div>
                <div class="row justify-content-center mb-5">
                    <a href="{{url('/createonity')}}" class="btn btn-outline-primary m-2 align-content-center">Add Data ONITY</a>
                    <a href="{{url('/room/getallonity')}}" class="btn btn-outline-primary m-2 align-content-center">Check All Data ONITY</a>
                </div>

                <div class="container mt-3 mb-3 ">
                    <form class="form-inline justify-content-center" method="get" action="{{url('/room/getallrooms/search')}}">
                        <input class="form-control mr-sm-2" type="text" name="q" placeholder="Room search..." aria-label="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

                <table class="table table-bordered table-striped table-responsive-sm text-center table-wrapper-scroll-y my-custom-scrollbar" >
                    <thead>
                    <tr>
                        <th>No Room</th>
                        <th>Floor</th>
                        <th>Type</th>
                        <th>Ip Address</th>
                        <th>Operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $a)
                        <tr>
                            <td>{{$a->noroom}}</td>
                            <td>{{$a->floor}}</td>
                            <td>{{$a->type}}</td>
                            <td>{{$a->ipaddress}}</td>
                            <td>
                                <a href="{{url('/room/'.$a->id)}}" class="btn btn-primary m-2">CHECK IPTV</a>
                                <a href="{{url('/room2/'.$a->id)}}" class="btn btn-primary m-2">CHECK ONITY</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>

        </div>
    </div>
</div>
@endsection



