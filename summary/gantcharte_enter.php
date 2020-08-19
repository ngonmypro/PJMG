<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
?>
<div class="page-title">
    <div class="title_left">
     <h3>Project Gant Chart  <small>Listing design</small></h3>
         </div>
    </div>
<div class="row">
 <div class="col-md-12">
    <div class="x_panel">
     <div class="x_content">
     <div class="row">
     <!--<div class="col-md-1 text-right"><h4><label class="control-label">Users</label></h4></div>
     <div class="col-md-1">-->
       <div class="col-md-1 text-center"><h4><label class="control-label">Users</label></h4></div>
       <div class="col-md-2">
       <?php $sql_auser4 = 'SELECT * FROM tbl_users';
             $objauser4 = mysql_query($sql_auser4)?>
         <select class="form-control" id="user">
           <option value=""> ALL Users </option>
         <?php while ($row4 = mysql_fetch_array($objauser4)) { ?>
           <option value="<? echo $row4['UserSname']; ?>" ><? echo $row4['UserSname']; ?></option>
           <?php }?>
         </select>
     </div>

       <div class="col-md-1 text-center"><h4><label class="control-label">Date</label></h4></div>
       <div class="col-md-1">
       <div class='input-group date' id='date1a'>
           <input type='date' class="form-control"  id="date1">
           <!--<span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
           </span>-->
       </div>
       </div>

       <div class="col-md-2 text-right"><h4><label class="control-label"> To </label></h4></div>
       <div class="col-md-1">
       <div class='input-group date' id='date2a'>
           <input type='date' class="form-control"  id="date2">
           <!--<span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
           </span>-->
       </div>
       </div>

       <div class="col-md-2"><h4><label for="control-label"></label></h4> </div>
       <div class="col-md-2">
         <button class="form-control btn btn-success" type="button"  onclick="javascript:enter_gantchart();">ตกลง</button>
       </div>


     <br>

     </div>
   </div>

     <div id="chart"></div>
     </div>
     </div>
     </div>

<script>
$("#chart").load("summary/gantcharte.php");
    /*$(function () {
        $("#sum_tb").load("summary/sum_table.php",{ year :$("#year").val() });
    });

    function chy() {
        var year = $("#year").val();
        $("#sum_tb").load("summary/sum_table.php",{ year : year});
    }*/
</script>
