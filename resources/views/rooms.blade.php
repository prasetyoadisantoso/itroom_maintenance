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
            <div class="container align-center">
                    <img src="https://www.watermark-bali.com/wp-content/uploads/2016/07/watermark-hotel-bali-logo.png" alt="Watermark & SPA Hotel Bali" class="mx-auto d-block" width="200px">
            </div>
            <div class="container">
                <h2>Rooms</h2>
                <table class="table table-bordered table-striped table-responsive-sm" >
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
                                <a href="{{url('/room/'.$a->id)}}" class="btn btn-primary">CHECK</a>
                                <a href="{{url('/createiptv')}}" class="btn btn-primary">IPTV</a>
                                <a href="{{url('/createonity')}}" class="btn btn-primary">ONITY</a></td>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <br>

        </div>
    </div>
</div>

</body>
</html>
