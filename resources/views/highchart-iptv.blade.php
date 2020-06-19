<div id="here">
    <canvas id="myChart"  height="150px"></canvas>
</div>



<script src="{{asset('/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/js/canvas.min.js')}}"></script>
<script src="{{asset('/js/Chart.js')}}"></script>
<script type="text/javascript">    
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Remote', 'STB', 'Infrared'],
        datasets: [{
            label: 'Tool\'s Condition in %',
            data: [{{ json_encode($percentrem, JSON_NUMERIC_CHECK) }}, {{ json_encode($percentstb, JSON_NUMERIC_CHECK) }}, {{ json_encode($percentir, JSON_NUMERIC_CHECK) }}  ],
            backgroundColor: [
                'rgb(0,139,139)',
                'rgb(0,139,139)',
                'rgb(0,139,139)',
            ],
            barPercentage: 0.5,
            
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max: 100
                     
                }
            }]
        }
    }
    
    });


    $(document).ready(function(){
    setInterval(function(){
        $("#here").load('/room/highchart-iptv');
        }, 15000);

    setInterval(function() {
            location.reload('#myChart');              
        }, 60000);
    });

</script>
