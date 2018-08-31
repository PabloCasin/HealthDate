@extends('layouts.backend')
@section('titulo')
Facultativos
@endsection
@section('contenido')
<div class="row justify-content-md-center">
<div class="col-md-10">
  <div class="card card-plain">
    <div class="card-header card-header-primary">
      <h4 class="card-title mt-0"> Facultativos</h4>
      <p class="card-category"> Listado de facultativos dados de alta</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="">
            <th>
              Nombre
            </th>
            <th>
              Foto
            </th>
            <th>
              Email
            </th>
            <th>
              Especialidad
            </th>
            <th>
              Agenda
            </th>
          </thead>
          <tbody>
          @foreach ($facultativos as $facultativo)
            <tr>

              <td>
                {{$facultativo->nombre}} {{$facultativo->apellido}}
              </td>
              <td>
              <div class="card-avatar">
                <img src="{{$facultativo->fotografia}}">
              </div>
              </td>
              <td>
                {{$facultativo->email}}
              </td>
              <td>
                {{$facultativo->servicio->nombreUnidad}}
              </td>
              <td>
              <a href="/facultativos/{{$facultativo->id}}"><i class="material-icons">schedule</i></a>
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