@extends('layouts.backendCalendario')
@section('titulo')
Calendario
@endsection
@section('script')
<script>

  $(document).ready(function() {

	  $('#calendar').fullCalendar({
	      firstDay:'1',
	      locale: 'es',
	      eventLimit: true, // allow "more" link when too many events
	      header:{
	    	  left:   'title',
	    	  center: '',
	    	  right:  'today prev,next'
	    	},
	    	eventSources:[
			{
				url:'/agenda',
				textColor: 'white'
			}
	    	]
	    });
	  
  });

</script>
@endsection
@section('contenido')
  <div class="row justify-content-md-center">
  	<div id='calendar' class="col-md-10"></div>
  </div>
@endsection