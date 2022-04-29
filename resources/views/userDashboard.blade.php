@extends('layouts.dashboard-layout')

@section('content')
<div class="container-fluid">

</div>
  <div class="container" style="padding: 20px;">
    <div class="row">
      <div class="col-md-12">
        <h4>Vaccinated Monthly (By Gender) Yr {{ $year }}</h4>
        <canvas id="chart-1"></canvas>
      </div>
       <!-- <div class="col-md-8">
       <h3>Vaccinated Gender (By Vaccine Brand)</h3>
        <canvas id="chart-2"></canvas>
      </div> -->
    </div>
  </div>
<script>

  const data = {
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

  // const data2 = {
  //   labels: {!! $brands->toJSON() !!},
  //   datasets: [
  //     {
  //       label: 'Male',
  //       backgroundColor: '#1976D2',
  //       borderColor: '#1976D2',
  //       data: [0, 10, 5, 2, 20, 30, 45],
  //     },
  //     {
  //       label: 'Female',
  //       backgroundColor: 'rgb(255, 99, 132)',
  //       borderColor: 'rgb(255, 99, 132)',
  //       data: [0, 10, 20, 30, 20, 30, 45],
  //     }
  //   ]
  // };

  const config = {
    type: 'bar',
    data: data,
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

  //  const config2 = {
  //   type: 'bar',
  //   data: data2,
  //   options: {}
  // };
  // new Chart(
  //   document.getElementById('chart-2'),
  //   config2
  // );
</script>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'Most COVID Vaccine being Taken'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>



@endsection