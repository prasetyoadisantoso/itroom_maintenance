<!DOCTYPE html>
<html>
<head>
    <title>Relationship Tables</title>
    <link href="bootstrap-4.2.1-stable/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h3 class="text-center"><a href="#">Watermark IT Maintenance</a></h3>
            <h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
            <div class="container">
                <h2>Rooms</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No Room</th>
                        <th>Floor</th>
                        <th>Type</th>
                        <th>Ip Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $a)
                        <tr>
                            <td>{{$a->noroom}}</td>
                            <td>{{$a->floor}}</td>
                            <td>{{$a->type}}</td>
                            <td>{{$a->ipaddress}}</td>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>

            <div class="container">
                <h4>IPTV</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No Room</th>
                        <th>Date</th>
                        <th>STB</th>
                        <th>Note STB</th>
                        <th>Remark</th>
                        <th>Mac Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $a)
                        <tr>
                            @foreach($a->iptv as $t)
                                <td>{{$a->noroom}}</td>
                                <td>{{$t->date}}</td>
                                <td>{{$t->stb}}</td>
                                <td> {{$t->notestb}}</td>
                                <td> {{$t->remark}}</td>
                                <td> {{$t->macaddress}}</td>
                        </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="container">
                <h4>Onity</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Cable</th>
                        <th>Note Cable</th>
                        <th>Remark</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rooms as $a)
                        <tr>
                            @foreach($a->onity as $t)
                                <td>{{$t->date}}</td>
                                <td>{{$t->cable}}</td>
                                <td> {{$t->notecable}}</td>
                                <td> {{$t->remark}}</td>
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>
