@extends('layouts.backend')
@section('titulo')
Facultativos
@endsection
@section('contenido')
<div class="row justify-content-md-center">
<div class="col-md-10">
  <div class="card card-plain">
    <div class="card-header card-header-primary">
      <h4 class="card-title mt-0"> Usuarios</h4>
      <p class="card-category"> Listado de Pacientes y Administrativos</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover" id="tablaUsuarios">
          <thead class="">
            <th>
              
            </th>
            <th>
              Nombre
            </th>
            <th>
              Email
            </th>
            <th>
            Direccion
            </th>
            <th>
              Tel&eacute;fono
            </th>
            <th>
              Rol
            </th>
            <th>
              CRUD
            </th>
          </thead>
          <tbody>
          @foreach ($users as $user)
            <tr>

              <td>
                {{$user->id}}
              </td>
              <td>
 				{{$user->nombre}} {{$user->apellido}} {{$user->segundoApellido}}
              </td>
              <td>
                {{$user->email}}
              </td>
              <td>
              {{$user->direccion}} {{$user-> cp}}<br/>{{$user->localidad}} - {{$user->provincia}}
              </td> 	
              <td>
              	{{$user->telefono}}
              </td>
              <td>
				{{$user->rol}}
              </td>
               <td>
               	<a href="#" class="btn btn-xs btn-danger delete" id="{{$user->id}}"><i class="glyphicon glyphicon-remove"></i> Borrar</a>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
        {{ $users->links() }}
      </div>
    </div>
  </div>
</div>
</div>
<script>
$(document).on('click', '.delete', function(){
	var id = $(this).attr('id');
	{
	    $.ajax({
	        url:"{{route('user.delete')}}",
	        method:"get",
	        data:{id:id},
	        success:function(data)
	        {
	            
	            $('#tablaUsuarios').ajax.reload();
	            }
	        })
	    }
	    
	}); 
</script>
@endsection
