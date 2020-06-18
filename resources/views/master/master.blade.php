<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.2.1-stable/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.2.1-stable/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap-4.2.1-stable/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.js"></script>

{{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">--}}
{{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>--}}

    <link href="../../bootstrap-4.2.1-stable/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="../bootstrap-4.2.1-stable/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-4.2.1-stable/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <script src="../../bootstrap-4.2.1-stable/js/gijgo.min.js" type="text/javascript"></script>
    <script src="../bootstrap-4.2.1-stable/js/gijgo.min.js" type="text/javascript"></script>
    <script src="bootstrap-4.2.1-stable/js/gijgo.min.js" type="text/javascript"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>@yield('title')</title>


</head>
<body>
@yield('content')

<script type="text/javascript">
    $('#date').datepicker({
        format: 'dd-mm-yyyy'
    });
</script>
</body>
</html>
