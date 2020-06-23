<!DOCTYPE html>
<html lang="en">
{{-- This page specially collecting Onity Data Base --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/bootstrap-4.2.1-stable\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script type="text/javascript" src="{{asset('/bootstrap-4.2.1-stable/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bootstrap-4.2.1-stable/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/bootstrap-4.2.1-stable/js/popper.min.js')}}"></script>
    <title>All Data</title>


</head>

<body>

    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif



    <div class="container col-lg-12">
        <div class="card mt-5">
            <div class="card-body col-lg-12">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 mb-5">
                            <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png"
                                alt="Watermark & SPA Hotel Bali" class="mx-auto d-block" width="150px">
                        </div>

                        <div class="col-lg-4 my-auto">
                            <h4 class="text-center ml-3">All Data Maintenance Onity</h4>
                            <p class="text-center">Data from ONITY conditions, stored in this page.</p>
                        </div>

                        <div class="col-lg-4 my-auto text-center">
                            <a href="{{url('/room')}}" class="btn btn-sm btn-outline-primary">Back to Home</a>
                            <a href="{{url('/exportonity')}}" class="btn btn-sm btn-outline-success">Export to Excel</a>
                        </div>

                    </div>

                    @include('highchart-onity')

                    <div class="container mt-3 mb-3 ">
                        <form class="form-inline justify-content-center" method="get"
                            action="{{url('/room/getallonity/search')}}">
                            <input class="form-control mr-sm-2" type="text" name="q" placeholder="Room search..."
                                aria-label="Search">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>


                    {{--                Pagination with Floor--}}

                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-12 col-xs-12 col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="{{url('/room/getallonity?page=')}}">
                                            <span aria-hidden="true">All Floor : </span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="{{url('/room/getallonity?page=1')}}">1</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="{{url('/room/getallonity?page=2')}}">2</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="{{url('/room/getallonity?page=3')}}">3</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="{{url('/room/getallonity?page=4')}}">4</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="{{url('/room/getallonity?page=5')}}">5</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <table class="table table-hover table-bordered table-striped table-responsive text-center table-wrapper-scroll-y my-custom-scrollbar">
                        <thead>
                            <tr class="bg-info text-light text-center ">
                                <th>No Room</th>
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
                                <th>Note Safety Box</th>
                                <th>Remark</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $a)
                            <tr class="bg-light">
                                @foreach($a->onity as $t)
                                <td>{{$a->noroom}}</td>
                                <td>{{$t->date}}</td>
                                <td>{{$t->cable}}</td>
                                <td> {{$t->notecable}}</td>
                                <td>{{$t->dnd}}</td>
                                <td> {{$t->notednd}}</td>
                                <td>{{$t->bel}}</td>
                                <td> {{$t->notebel}}</td>
                                <td>{{$t->keytag}}</td>
                                <td> {{$t->notekeytag}}</td>
                                <td>{{$t->reader}}</td>
                                <td> {{$t->notereader}}</td>
                                <td>{{$t->safetybox}}</td>
                                <td> {{$t->notesafetybox}}</td>
                                <td> {{$t->remark}}</td>
                                <td>
                                    <form action="{{url('/createonity/delete/' . $t->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{url('/createonity/edit/' . $t->id)}}"
                                            class="btn btn-success mb-1">Edit</a>
                                        {{-- <a href="addnote/delete/{{$item->id}}">Delete{{$item->id}}</a> --}}
                                        <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                    {{--                {{ $rooms->links() }}--}}
                </div>



                <br>

            </div>
        </div>
    </div>



</body>

</html>
