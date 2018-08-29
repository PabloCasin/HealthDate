@extends('layouts.backendCalendario')
@section('titulo')
Agendas
@endsection
@section('script')
<script>

  $(document).ready(function() {

	  $('#calendar').fullCalendar({
		  defaultView: 'listWeek',
	      defaultDate: '2018-03-12',
	      firstDay:'1',
	      locale: 'es',
	      editable: true,
	      eventLimit: true, // allow "more" link when too many events
	      header:{
	    	  left:   'title',
	    	  center: '',
	    	  right:  'today prev,next'
	    	},
        	eventSources: [
        	    {
        	      url: '/agenda', // use the `url` property
        	      color: 'yellow',    // an option!
        	      textColor: 'black',  // an option!
        	      startParam:'fechaCita'
        	    }
        	  ]
	    });
	  
  });

</script>
@endsection
@section('contenido')
  <div id='calendar'></div>
@endsection