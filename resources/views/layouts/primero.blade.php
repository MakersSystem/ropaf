
<div class="container-fluid">
  <div class="header-body">
  <div class="container-fluid mt--9">
      <div class="row">
          <div class="col-xl-12">
            @if($organizacion)
               <h1 class="text-uppercase text-muted ls-1 mb-1"> {{ $organizacion->nombre }} </h1>
            @else
                <h2 class="text-uppercase text-white">A un no se llenaron Datos de esta organizacion</h2>
            @endif
          </div>
      </iv>
      <div class="row">
          <div class="col-xl-6">
              <div class="card shadow bg-primary">
                  <div class="card-header bg-transparent">
                      <div class="row align-items-center">
                          <div class="col">
                              <h4 class="text-uppercase text-muted ls-1 mb-1">Ubicacion de la organizacion</h4>

                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="chart">

                          {{-- {!! $chart2->container() !!}
                          {!! $chart2->script() !!} --}}
                          {{-- {{ $problemas[0] }}
                          {{ $problemas[1] }}
                          {{ $problemas[2] }}
                          {{ $problemas[3] }} --}}
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6">
              <div class="card shadow">

                  <div class="card-header bg-transparent">
                      <div class="row align-items-center">
                          <div class="col">
                              <h4 class="text-uppercase text-muted ls-1 mb-1">Estado de la Organizacion</h4>

                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="chart">
                          @if($organizacion)
                            <canvas id="radarChart1" class="chart-canvas"></canvas>
                          @else

                          @endif
                      </div>


                  </div>
              </div>
          </div>

          <div class="col-xl-6 pt-3">
              <div class="card shadow bg-primary">
                  <div class="card-header bg-transparent">
                      <div class="row align-items-center">
                          <div class="col">
                              @if($organizacion)
                                <h4 class="text-uppercase text-muted ls-1 mb-1">Descargar Reporte</h4>
                                <button type="button" onclick="window.location='{{ url("/desc_repo_global") }}'" class="btn btn-primary">Descargar</button>
                              @else

                              @endif
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>




  <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
  <script>
    var pro_orga = {!! json_encode($problemas[0]) !!};
    var pro_admi = {!! json_encode($problemas[1]) !!};
    var pro_repre = {!! json_encode($problemas[2]) !!};
    var pro_prod = {!! json_encode($problemas[3]) !!};

    var lineChartData = {
      labels : ['organizacional', 'administrativo', 'representiacion', 'produccion'],
      datasets : [
        {
          label: 'estado de la organizacion',
          pointStrokeColor : "#fff",
          data : [pro_orga, pro_admi, pro_repre, pro_prod],
          bezierCurve : true,
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        }
      ]
    }

    // var lineChartData = {
    //   labels : ['proble. orga.', 'proble. admi.', 'proble. repre.', 'proble. prod.'],
    //   datasets : [
    //     {
    //       label: 'problemas de la organizacion',
    //       pointStrokeColor : "#fff",
    //       data : [65, 59, 90, 81],
    //       bezierCurve : true,
    //       backgroundColor: [
    //         'rgba(105, 0, 132, .2)',
    //       ],
    //       borderColor: [
    //         'rgba(200, 99, 132, .7)',
    //       ],
    //       borderWidth: 2
    //     }
    //   ]
    // }

    function done(){
        // alert("haha");
        // url=myLine.toBase64Image();
        // document.getElementById("url").src=url;
        // link.href = url;
    }

    var options = {
      responsive : true,
      borderColor : [
        'rgba(200, 99, 132, .7)',
      ],
      borderWidth : 2,
      bezierCurve : false,
      legend : {display : false},
      animation: {
        onComplete: done
      }
    };

    var myLine = new Chart(document.getElementById("radarChart1").getContext("2d"),{
      data:lineChartData,
      type:"radar",
      options:options
    });

  </script>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! $chart->container() !!}

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset=utf-8></script>

    {!! $chart->script() !!}
</body>
</html> --}}
