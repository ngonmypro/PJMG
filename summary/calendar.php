<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<div class="page-title">
    <div class="title_left">
     <h3>Project Calendar  <small>Listing design</small></h3>
         </div>
    </div>
<div class="row">
 <div class="col-md-12">
    <div class="x_panel">
     <div class="x_title">
        <h2>Calendar </h2>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
     <div id='calendar'></div>
     </div>
</div>
</div>
</div>
<script>
    $(function () {
        $("#calendar").fullCalendar({
            eventSources: [ 'summary/resourcecalender.php' ]
        });
    });
</script>
