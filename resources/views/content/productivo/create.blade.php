@extends('layouts.user')
@section('content')

@include('user.partials.header', [
        'title' => __('Datos Productivos'),
    ])
<div class="container-fluid mt--8">
  <div class="header-body">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <form method="POST" action="/daprodu">
              {{ csrf_field() }}
              
              <button type="submit" class="btn btn-primary">Continuar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
