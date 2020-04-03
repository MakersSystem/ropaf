@extends('layouts.reportLayout')
@section('content')
<table>
  <td><img src="{{public_path('argon/img/brand/blue.png')}}" height="100" alt=""> </td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <th height="90" valign="center" align="center" style="font-weight: bold;">
    <h1>ORGANIZACIONEdsS</h1>
  </th>
</table>

<table style="border: 3px solid #000000;">
    <thead style="color: white;">
    <tr height="40" valign="middle">
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Nro</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Nombre</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Sigla</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Departamento</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Provincia</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Municipio</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Representante</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Direccion</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Telefono</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Correo</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Organizacion</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Nivel</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>nro Comunidades</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Latitud</h4></th>
        <th style="background-color: #caff96; border: 2px solid #000000; font-weight: bold;" valign="center"><h4>Longitud</h4></th>
    </tr>
    </thead>
    <tbody>
      @foreach($organizacion as $number => $organizacions)
        <tr>
            <td style="border: 2px solid #000000;">{{ $number +1 }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->nombre }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->sigla }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->departamento }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->provincia }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->municipio }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->representante }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->direccion }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->telefono }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->correo }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->organizacion }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->nivel }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->nro_comunidades }}</td>
            <td style="border: 2px solid #000000;">{{ $organizacions->latitud }}</td>
            <td style="border: 2px solid #000000;"  >{{ $organizacions->longitud }}</td>
        </tr>
     @endforeach
    </tbody>
</table>

@endsection
