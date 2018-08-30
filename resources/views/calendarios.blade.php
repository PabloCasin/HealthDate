@extends('layouts.backendCalendario')
@section('titulo')
Agendas
@endsection
@section('script')
<script>

  $(document).ready(function() {

	  $('#calendar').fullCalendar({
	      defaultDate: '2018-08-30',
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
  <div id='calendar'></div>
@endsection