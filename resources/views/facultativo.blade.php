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
@endsection

@section('script')

<?php 
echo"
<script>

  $(document).ready(function() {

	  $('#calendar').fullCalendar({
          defaultView: 'listWeek',  
	      defaultDate: '2018-08-30',
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