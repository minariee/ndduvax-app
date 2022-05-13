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
</script>
</html>

@endsection
</div>

