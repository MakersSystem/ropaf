@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Organizacion'),
        'description' => __('
En esta seccion se pueden crear nuevos Usuarios para cada una de las Asociaciones, asi mismo se puede administrar cada perfil de cada Usuario'),
        'class' => 'col-lg-7'
    ])
  @can('users_manage')
    @include('layouts.primero')
    {{-- por si acaso ;) ojo --}}
    {{-- @include('layouts.footers.guest')  --}}
  @endcan
@endsection
