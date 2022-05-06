@extends('layouts.dashboard-layout')

@section('content')
<script>
    
    var data2 = {
    labels: {!! $months->toJSON()!!},
    datasets: [
      {
        label: 'Male',
        backgroundColor: '#1976D2',
        borderColor: '#1976D2',
        data: {!! $dataset1Male->toJSON() !!},
      },
      {
        label: 'Female',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: {!! $dataset1Female->toJSON() !!},
      }
    ]
  };

      const config = {
    type: 'bar',
    data: data2,
    options: {
      scales: {
        yAxes: [{
            ticks: {
                stepSize: 1
            },
            gridLines: {
                display: false
            }
        }]
      }
    }
  };
  const myChart = new Chart(
    document.getElementById('chart-1'),
    config
  );
</script>

<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData?>
        ]);

        var options = {
          title: 'List of COVID Vaccines being Taken'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    </script>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div><canvas id="chart-1"></canvas></div>
-->
@endsection