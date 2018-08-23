@extends('layouts.backend')
@section('titulo')
Servicios
@endsection
@section('contenido')
<div class="row justify-content-md-center">
<div class="col-md-10">
  <div class="card card-plain">
    <div class="card-header card-header-primary">
      <h4 class="card-title mt-0"> Servicios</h4>
      <p class="card-category"> Listado de servicios dados de alta</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="">
            <th>
              Codigo
            </th>
            <th>
              Nombre
            </th>
            <th>
              Descripci&oacute;n
            </th>
            <th>
              Activo
            </th>
            <th></th>
          </thead>
          <tbody>
          @foreach ($servicios as $servicio)
            <tr>

              <td>
                {{$servicio->codigoUnidad}}
              </td>
              <td>
              {{$servicio->nombreUnidad}}
              </td>
              <td>
                {{$servicio->descripcionUnidad}}
              </td>
              <td>
              @if($servicio->activo == 1)             	
              	<div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="1" checked>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
              @else
              	<div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" >
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
              @endif
              </td>
              <td>
              <button type="button" rel="tooltip" title="Editar Servicio" class="btn btn-primary btn-link btn-sm">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" title="Borrar Servicio" class="btn btn-danger btn-link btn-sm">
                    <i class="material-icons">close</i>
                  </button>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection