@extends("layouts.template_pengunjung")

@section("ajax_calendar_css")
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
@endsection

@section('title')
  Data Event
@stop

@section("page_content")

<div style=" background:#F8F8FF ; padding:15px; color:black;">
    <div class="col-md-12">
        <div id="calendar"></div>  
    </div>
</div>
@endsection

@section("ajax_calendar_js")
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script>
$(document).ready(function () {

 

    var calendar = $('#calendar').fullCalendar({
        
        header:{
            left:'prev,next today',
            center:'title',
        },
        events:'/admin/full-calender/',
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Event Title:');

        },

 

       
    });

});
  
</script>
@endsection