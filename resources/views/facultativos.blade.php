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
              <i class ="delete-modal material-icons">delete</i>
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

<!-- Modal form to delete a form -->
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <h3 class="text-center">Are you sure you want to delete the following post?</h3>
                <br />
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_delete" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Title:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="title_delete" disabled>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                        <span id="" class='glyphicon glyphicon-trash'></span> Delete
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<!-- AJAX CRUD operations -->
<script type="text/javascript">

    // add a new post
   
    // Show a post
    $(document).on('click', '.show-modal', function() {
        $('.modal-title').text('Show');
        $('#id_show').val($(this).data('id'));
        $('#title_show').val($(this).data('title'));
        $('#content_show').val($(this).data('content'));
        $('#showModal').modal('show');
    });


    // Edit a post
  
    // delete a post
    $(document).on('click', '.delete-modal', function() {
        $('.modal-title').text('Delete');
        $('#id_delete').val($(this).data('id'));
        $('#title_delete').val($(this).data('title'));
        $('#deleteModal').modal('show');
        id = $('#id_delete').val();
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'DELETE',
            url: 'facultativos/' + id,
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(data) {
                toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                $('.item' + data['id']).remove();
            }
        });
    });
</script>
@endsection