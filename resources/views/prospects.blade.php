@extends('master')

@section('content')
<div class="container">
  <form method="POST" action="http://prospects.cabify.zarego.com/prospects" accept-charset="UTF-8"><input name="_token" type="hidden" value="oaoaRXKUpz2Kg2S1eBGVlOPMu3Na3YbKLlhqxNP2">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5">
        <div class="form-group ">
        <label for="Nombre">Nombre</label>
        <input class="form-control cust-text-rounded" placeholder="Ingrese el nombre" name="name" type="text">
        <span class="text-danger"></span>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group ">
        <label for="Apellido">Apellido</label>
        <input class="form-control cust-text-rounded" placeholder="Ingrese el apellido" name="lastname" type="text">
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
        <input class="form-control cust-text-rounded" placeholder="Ingrese el mail" name="email" type="text">
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
