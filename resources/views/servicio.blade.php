@extends('layouts.backend')
@section('titulo')
Servicios
@endsection
@section('contenido')
<div class="row justify-content-md-center">
<div class="col-md-10">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">{{$servicio->codigoUnidad}} {{$servicio->nombreUnidad}}</h4>
    </div>
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label class="bmd-label-floating">C&oacute;digo de la Unidad</label>
              <input type="text" class="form-control" value="{{$servicio->codigoUnidad}}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="bmd-label-floating">Nombre de la Unidad</label>
              <input type="email" class="form-control" value="{{$servicio->nombreUnidad}}">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="form-group">
                <label class="bmd-label-floating"> Descripci&oacute;n de la Unidad.</label>
                <textarea class="form-control" rows="5" value="{{$servicio->descripcionUnidad}}"></textarea>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary pull-right">Guardar Cambios</button>
        <div class="clearfix"></div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection