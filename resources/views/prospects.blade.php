@extends('master')

@section('content')
<div class="container">
  <form method="POST" action="/prospects" accept-charset="UTF-8">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        @isset($succed)
          @if($succed === true)
          <div class="alert alert-success alert-dismissable">
           <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $msg ?? '' }}</strong>
          </div>
          @else
          <div class="alert alert-danger alert-dismissable">
           <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $msg ?? '' }}</strong>
          </div>
          @endif
        @endisset

      </div>
      <div class="col-sm-1"></div>
    </div>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <div class="form-group ">
        <label for="Nombre">Nombre</label>
        <input class="form-control cust-text-rounded" placeholder="Ingrese el nombre" name="name" type="text" required>
        <span class="text-danger"></span>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group ">
        <label for="Apellido">Apellido</label>
        <input class="form-control cust-text-rounded" placeholder="Ingrese el apellido" name="lastname" type="text" required>
        <span class="text-danger"></span>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="form-group ">
        <label for="Mail">Mail</label>
        <input class="form-control cust-text-rounded" placeholder="Ingrese el mail" name="email" type="email" required>
        <span class="text-danger"></span>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="form-group">
        <button class="btn btn-send">Enviar</button>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </form>
</div>
@stop
