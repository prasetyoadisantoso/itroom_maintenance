<div id="inichart" class="container my-5">
    <div id="highchart" class="me"></div>
</div>
<div id="add"></div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        
        $(function () {

            var percentrem = {{ json_encode($percentrem,JSON_NUMERIC_CHECK) }};
            var percentstb = {{ json_encode($percentstb,JSON_NUMERIC_CHECK) }};
            var percentir = {{ json_encode($percentir,JSON_NUMERIC_CHECK) }};

            $('#highchart').highcharts(
                {
                    chart: {
                        type: 'column',
                        /*events: {
                            load: function () {
                                // set up the updating of the chart each second
                                var series = this.series[0];
                                setInterval(function(){
                                    series.update({
                                        data: [percentrem, percentstb, percentir]
                                    }, true);
                                }, 1000);
                            }
                        }*/
                    },
                    title: {
                        text: 'Tool\'s Condition '
                    },
                    subtitle: {
                        text: 'Source: Prasetyo with Laravel'
                    },
                    xAxis: {
                        categories: [
                            dataREM ='Remote',
                            dataSTB ='STB',
                            dataSTB ='IR',
                                    ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        max: 100,
                        title: {
                            text: 'Condition in Percentage'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'GOOD',
                        data: [percentrem, percentstb, percentir]
                        }]

                        });





        });

        
        setInterval(function() {
        Highcharts.charts.forEach(chart => {
            location.reload('#add');              
        })
        }, 18000);
        
        
               
    </script>
