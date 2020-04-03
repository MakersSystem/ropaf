@extends('layouts.app')

@can('users_manage')
@section('content')
    @include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-12">
        <div class="card shadow">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="text-uppercase text-primary ls-1 mb-1">asociaciones y productores</h4>
                        <h4 class="mb-0 text-muted">Total Bolivia</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart" style="overflow:hidden; padding-bottom:5%; position:relative; height:200%;">
                    <canvas id="horizontalBar2" class="chart-canvas"></canvas>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row mt-3">       
        <div class="col-xl-6">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="text-uppercase text-primary ls-1 mb-1">Problemas</h4>
                            <h2 class="mb-0 text-muted">Asociaciones</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart" style="overflow:hidden; padding-bottom:5%; position:relative; height:200%;">
                        <canvas id="radarChart1" class="chart-canvas"></canvas>                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card shadow bg-primary">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="text-uppercase text-muted ls-1 mb-1">Reporte Global</h4>
                            <button type="button" onclick="window.location='{{ url("/desc_repo_global") }}'" class="btn btn-primary">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow bg-primary mt-3">
              <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                      <div class="col">
                          <h4 class="text-uppercase text-muted ls-1 mb-1">Organizaciones por Departamento</h4>
                          <button type="button" onclick="window.location='{{ url("/desc_repo_departamento") }}'" class="btn btn-primary">Descargar</button>

                      </div>
                  </div>
              </div>
            </div>
            <div class="card shadow bg-primary mt-3">
              <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                      <div class="col">
                          <h4 class="text-uppercase text-muted ls-1 mb-1">Rubro de Organizaciones</h4>

                          <button type="button" onclick="window.location='{{ url("/desc_repo_rubro") }}'" class="btn btn-primary">Descargar</button>

                      </div>
                  </div>
              </div>
            </div>
            <div class="card shadow bg-primary mt-3">
              <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                      <div class="col">
                          <h4 class="text-uppercase text-muted ls-1 mb-1">Graficos en excel</h4>

                          {{-- <button type="button" onclick="window.location='{{ url("/desc_repo_rubro") }}'" class="btn btn-primary">Descargar</button> --}}
                          <form method="post" id="myAwesomeForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <button type="submit" id="submitButton" name="submitButton" class="btn btn-primary">guardar en excel</button> <!-- Submit -->
                          </form>
                      </div>
                  </div>
              </div>
            </div>
        </div>

        <div class="col-xl-12 mb-5 mb-xl-0 mt-5">
            <div class="card shadow bg-primary">
                <div class="card-header bg-primary bg-transparent">
                    <div class="row align-items-center">
                      <h1 class="display1 ml-3 mt-2 text-muted">Ubicacion de las Organizaciones en Bolivia</h1>
                    </div>
                </div>

                <div class="container map-responsive mt-3 mr-3 mb-3">
                  <mp id="map" class="map-responsive"></mp>
                </div>

                <script>
                  var map = L.map('map', {
                      center: [-16.4470376, -64.5762753],
                      zoom: 4,
                  }).setView([-16.4470376,-64.5762753], 6);
                  L.tileLayer('https://api.maptiler.com/maps/topo/256/{z}/{x}/{y}.png?key=yoBXxbCo30w0QG2HtniY', {
                    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
                  }).addTo(map);

                  @foreach($organizacion as $number => $organizacions)
                    var lat = {!! json_encode($organizacions->latitud) !!};
                    var lon = {!! json_encode($organizacions->longitud) !!};
                    var marker = L.marker([lat,lon]).bindPopup({!! json_encode($organizacions->nombre) !!}).addTo(map).openPopup();
                  @endforeach
                </script>
            </div>
        </div>

    </div>

    <div class="Card mt-5">
      <div class="card-header">
        <h1>Lista de Productos</h1>
      </div>
      <div class="card-body" style="background-color: #fff;">
        <div class="table-responsive">
            <table class="table-bordered table-striped table-hover datatable datatable-Product">
                <thead class="thead-light">
                    <tr valign="middle">
                        <th width="50">
                            Id
                        </th>
                        <th width="10">
                            Producto
                        </th>
                        <th width="400">
                            Descripcion
                        </th>
                        <th width="100">
                            Imagen
                        </th>
                        <th width="100">
                          Organizacion
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($productos as $number => $producto)
                        <tr>
                            <td>
                              {{ $number +1 }}
                            </td>
                            <td>
                              {{ $producto->pro_nombre }}
                            </td>
                            <td>
                              {{ $producto->pro_descripcion }}
                            </td>
                            <td>
                              <img src="{{asset('argon/img/files/').'/'.$producto->pro_imagen}}" width="50">
                            </td>
                            <td>
                              @foreach ($orgs as $item)
                                  $item->nombre
                              @endforeach
                            </td>

                        </tr>
                  @endforeach


                </tbody>
            </table>
        </div>

      </div>

    </div>


    @include('layouts.footers.auth')
</div>
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
      @can('users_manage')
        let deleteButtonTrans = 'Eliminar Seleccionados'
        let deleteButton = {

          action: function (e, dt, node, config) {
            var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                return $(entry).data('entry-id')
            });

            if (ids.length === 0) {
              alert('{{ trans('global.datatables.zero_selected') }}')

              return
            }

            if (confirm('{{ trans('global.areYouSure') }}')) {
              $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: config.url,
                data: { ids: ids, _method: 'DELETE' }})
                .done(function () { location.reload() })
            }
          }
        }
        dtButtons.push(deleteButton)
      @endcan


      $.extend(true, $.fn.dataTable.defaults, {
        order: [[ 1, 'desc' ]],
        pageLength: 5,
        "language": {
            "lengthMenu": "Mostrar _MENU_ Mostrar por pagina",
            "zeroRecords": "No exiten Registros - Lo siento",
            "infoEmpty": "No hay Registros",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Registros del _START_ al _END_ de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
        }
      });
      $('.datatable-Product:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    });

</script>




@endsection
@endcan


@can('users')
  @section('content')
      @include('layouts.headers.cards')
      <div class="container-fluid mt--7">
          <div class="row">
              <div class="col-xl-6">
                  <div class="card shadow bg-primary">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h4 class="text-uppercase text-muted ls-1 mb-1">Descargar reporte de la orgranizacion</h4>

                                  <button type="button" onclick="window.location='{{ url("/desc_repo") }}'" class="btn btn-primary">Descargar</button>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="card shadow">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h4 class="text-uppercase text-muted ls-1 mb-1">Problemas</h4>
                                  <h2 class="mb-0">Asociaciones</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-12 mb-5 mb-xl-0 mt-5">
                  <div class="card bg-gradient-default shadow">
                      <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                              <div class="col">
                                  <h6 class="text-uppercase text-light ls-1 mb-1">revision</h6>
                                  <h2 class="text-white mb-0">Productos</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
  @endsection
@endcan


@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>


    <script>

    var pro_orga = {!! json_encode($problemas[0]) !!};
    var pro_admi = {!! json_encode($problemas[1]) !!};
    var pro_repre = {!! json_encode($problemas[2]) !!};
    var pro_prod = {!! json_encode($problemas[3]) !!};

    var lp = {!! json_encode($departamentos[0]) !!};
    var or = {!! json_encode($departamentos[1]) !!};
    var po = {!! json_encode($departamentos[2]) !!};
    var co = {!! json_encode($departamentos[3]) !!};
    var ch = {!! json_encode($departamentos[4]) !!};
    var ta = {!! json_encode($departamentos[5]) !!};
    var pa = {!! json_encode($departamentos[6]) !!};
    var be = {!! json_encode($departamentos[7]) !!};
    var sc = {!! json_encode($departamentos[8]) !!};


    var url;
    var url2;

    var lineChartData = {
      labels : ['Organizacional', 'Administrativo', 'Representiacion', 'Produccion'],
      datasets : [
        {
          label: 'Estados de la organizaciones',
          pointStrokeColor : "#fff",
          data : [pro_orga, pro_admi, pro_repre, pro_prod],
          bezierCurve : false,
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

    var lineChartData2 = {
      labels : ['La Paz', 'Oruro', 'Potosi', 'Cbba', '  Chuquisaca', 'Tarija', 'Pando', 'Beni', 'Santa Cruz'],
      datasets : [
        {
          label: 'Organizaciones por Departamento',
          pointStrokeColor : "#fff",
          data : [lp, or, po, co, ch, ta, pa, be, sc],
          bezierCurve : true,
          fill: true,
          backgroundColor: ["green", "orange", "red",
          "yellow", "purple", "cyan", "blue",
          "rgb(98, 16, 23)","rgb(31, 16, 23)"],
          borderColor: ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
          "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)",
          "rgb(98, 16, 23)","rgb(31, 16, 23)"],
          borderWidth: 0
        }
      ]
    }

    function done(){
      // alert("haha");
      url=myLine.toBase64Image();
      // document.getElementById("url").src=url;
      // link.href = url;
    }

    function done2(){
      // alert("haha");
      url2=myLine2.toBase64Image();
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

    var options2 = {
      responsive : true,
      borderColor : [
        'rgba(200, 99, 132, .7)',
      ],
      borderWidth : 1,
      bezierCurve : false,
      // tooltips : {enabled : false},
      legend : {display : false},
      scales: {
        xAxes: [{
          // display : false,
          ticks: {
            beginAtZero: true
          },
          categoryPercentage : 0.55,
          barPercentage : 0.5,
          gridLines : {
            display : false
          },
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true
          },
          gridLines : {
            display : false
          },
        }],
      },
      animation: {
        onComplete: done2
      }

    };
    // console.log(da[0],da[1],da[2],da[3]);
    var myLine = new Chart(document.getElementById("radarChart1").getContext("2d"),{
      data:lineChartData,
      type:"radar",
      options:options
    });

    var myLine2 = new Chart(document.getElementById("horizontalBar2").getContext("2d"),{
      data:lineChartData2,
      type:"horizontalBar",
      options:options2
    });
    // var url=myLine.toBase64Image();
    // document.getElementById("url").src=url;
    // console.log(chart);
    // document.getElementById("url").src = url;

    function b64toBlob(b64Data, contentType, sliceSize) {
        contentType = contentType || '';
        sliceSize = sliceSize || 512;

        var byteCharacters = atob(b64Data);
        var byteArrays = [];

        for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
            var slice = byteCharacters.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

        var blob = new Blob(byteArrays, {type: contentType});
        return blob;
    }

    $("#myAwesomeForm").submit(function(e){
        e.preventDefault();
        appendFileAndSubmit();
    });

    function appendFileAndSubmit(){
        // Get the form
        var form = document.getElementById("myAwesomeForm");

        var ImageURL = url;
        // Split the base64 string in data and contentType
        var block = ImageURL.split(";");
        // Get the content type
        var contentType = block[0].split(":")[1];// In this case "image/gif"
        // get the real base64 content of the file
        var realData = block[1].split(",")[1];// In this case "iVBORw0KGg...."

        // Convert to blob
        var blob = b64toBlob(realData, contentType);


        var ImageURL2 = url2;
        var block2 = ImageURL2.split(";");
        var contentType2 = block2[0].split(":")[1];
        var realData2 = block2[1].split(",")[1];
        var blob2 = b64toBlob(realData2, contentType2);

        // Create a FormData and append the file
        var fd = new FormData(form);
        fd.append("image", blob);
        fd.append("image2", blob2);

        // Submit Form and upload file
        $.ajax({
            url:"{{ route('ajaxupload.action') }}",
            data: fd,// the formData function is available in almost all new browsers.
            type:"POST",
            contentType:false,
            processData:false,
            cache:false,
            dataType:"json", // Change this according to your response from the server.
            error:function(err){
                console.error(err);
            },
            success:function(data){
                console.log(data);
            },
            complete:function(){
                console.log("Request finished.");
            }
        });
        window.location='{{ url("/repo_glob") }}';
        // $.ajax({
        //   method: 'GET',
        //   url: '/repo_glob/'
        // });
    }
    </script>

@endpush


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
