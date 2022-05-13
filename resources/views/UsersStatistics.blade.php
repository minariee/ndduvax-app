@extends('layouts.dashboard-layout')

@section('content')


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData?>
        ]);

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
      }
    </script>
  </head>
  <body>
    <br><br><h2 style="left:410px; position:relative;">Chart for All Users</h2></br></br>
    <center><div id="piechart" style="width: 900px; height: 500px;"></div></center>
  </body>
</html>
@endsection