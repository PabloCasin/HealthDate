@extends('layouts.backendCalendario')
@section('titulo')
Facultativo
@endsection
@section('contenido')
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Agenda</h4>
          <p class="card-category">Citas del Profesional</p>
        </div>
        <div class="card-body">
           <div id="calendar"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-profile">
        <div class="card-avatar">
          <a href="">
            <img class="img" src="{{$facultativo->fotografia}}" />
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-category text-gray">{{$facultativo->servicio->nombreUnidad}}</h6>
          <h4 class="card-title">{{$facultativo->tratamiento}} {{$facultativo->nombre}} {{$facultativo->apellido}}</h4>
          <p class="card-description">
          {{$facultativo->direccion}} {{$facultativo->cp}}<br>
          {{$facultativo->localidad}} - {{$facultativo->provincia}}<br>
          Tel. {{$facultativo->telefono}} email. {{$facultativo->email}} 
          </p>
          <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
        </div>
      </div>
    </div>
  </div>
<!-- MODAL BOXES -->


<!-- Modal form to show a post -->
<div id="showModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_show" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Title:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="title_show" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="content">Content:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="content_show" cols="40" rows="5" disabled></textarea>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal form to edit a form -->
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_edit" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title_edit" autofocus>
                            <p class="errorTitle text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="content">Content:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="content_edit" cols="40" rows="5"></textarea>
                            <p class="errorContent text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                        <span class='glyphicon glyphicon-check'></span> Edit
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


<?php 
echo"
<script>

  $(document).ready(function() {

	  $('#calendar').fullCalendar({
          defaultView: 'listWeek',  
	      firstDay:'1',
	      locale: 'es',
	      eventLimit: true,
	      header:{
	    	  left:   'title',
	    	  center: '',
	    	  right:  'today prev,next'
	    	},
	    	eventSources:[
			{
				url:'/agenda/".$facultativo->id."',
				textColor: 'white'
			}
	    	]
	    });
	  
  });

</script>"
?>
@endsection