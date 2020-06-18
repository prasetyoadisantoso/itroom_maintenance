<!DOCTYPE html>
<html lang="en">

{{-- This Page specially collection from IPTV database --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.2.1-stable\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\bootstrap-4.2.1-stable\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\bootstrap-4.2.1-stable\css\bootstrap.min.css">
    <link rel="stylesheet" href="../datatables/datatables.min.css">

    <script type="text/javascript" src="..\bootstrap-4.2.1-stable\js\jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="..\bootstrap-4.2.1-stable\js\bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="..\bootstrap-4.2.1-stable\js\popper.min.js"></script>
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>



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
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-4 mb-5">
                                <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png"
                                    alt="Watermark & SPA Hotel Bali" class="mx-auto d-block" width="150px">
                            </div>

                            <div class="col-lg-4 my-auto">
                                <h4 class="text-center ml-3">All Data Maintenance IPTV</h4>
                                <p class="text-center">Data from IPTV conditions, stored in this page.</p>
                            </div>

                            <div class="col-lg-4 my-auto text-center">
                                <a href="{{url('/room')}}" class="btn btn-sm btn-outline-primary">Back to Home</a>
                                <a href="{{url('/exportiptv')}}" class="btn btn-sm btn-outline-success">Export to
                                    Excel</a>
                            </div>

                        </div>

                        <div class="container mt-3 mb-3 ">
                            <form class="form-inline justify-content-center" method="get"
                                action="{{url('/room/getallonity/search')}}">
                                <input class="form-control mr-sm-2" type="text" name="q" placeholder="Room search..."
                                    aria-label="Search">
                                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>

                        {{--                Pagination with Floor--}}
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="{{url('/room/getalliptv?page=')}}">
                                        <span aria-hidden="true">All Floor : </span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="{{url('/room/getalliptv?page=1')}}">1</a></li>
                                <li class="page-item"><a class="page-link"
                                        href="{{url('/room/getalliptv?page=2')}}">2</a></li>
                                <li class="page-item"><a class="page-link"
                                        href="{{url('/room/getalliptv?page=3')}}">3</a></li>
                                <li class="page-item"><a class="page-link"
                                        href="{{url('/room/getalliptv?page=4')}}">4</a></li>
                                <li class="page-item"><a class="page-link"
                                        href="{{url('/room/getalliptv?page=5')}}">5</a></li>
                            </ul>
                        </nav>

                        <button type="button" class="btn btn-success btn-sm mb-2">
                            @foreach ($rooms as $item)
                            @foreach ($item->iptv->slice(2, 1) as $t)
                            Total Rooms Maintenance : <span class="badge badge-light">{{$t->count()}}</span>
                            @endforeach
                            @endforeach
                        </button>
                        <table class="table table-bordered table-striped table-responsive text-center data-table">
                            <thead>
                                <tr class="bg-info text-light text-center">
                                    <th>No Room</th>
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
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rooms as $a)
                                <tr class="bg-light">
                                    @foreach($a->iptv as $t)
                                    <td>{{$a->noroom}}</td>
                                    <td>{{$t->date}}</td>
                                    <td> {{$t->remote}}</td>
                                    <td> {{$t->noteremote}}</td>
                                    <td>{{$t->stb}}</td>
                                    <td> {{$t->notestb}}</td>
                                    <td> {{$t->ir}}</td>
                                    <td> {{$t->noteir}}</td>
                                    <td> {{$t->powersupply}}</td>
                                    <td> {{$t->remark}}</td>
                                    <td> {{$t->macaddress}}</td>
                                    <td>
                                        <form action="{{url('/createiptv/delete/' . $t->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{url('/createiptv/edit/' . $t->id)}}"
                                                class="btn btn-success mb-1">Edit</a>
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
                </div>
                <br>

            </div>
        </div>
    </div>



</body>

</html>
