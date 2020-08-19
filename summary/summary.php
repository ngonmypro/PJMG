<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<div class="page-title">
    <div class="title_left">
     <h3>Project Summary <small>Listing design</small></h3>
         </div>
    </div>
<div class="row">
 <div class="col-md-12">
    <div class="x_panel">
     <div class="x_title">
        <h2>Summary</h2>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
     <div class="row">
     <div class="col-md-1 text-right"><h4><label class="control-label">Year</label></h4></div>
     <div class="col-md-2">
        <select id="year" class="form-control" onchange="javascript:chy();" >
            <?php for ($i=2016; $i <= Date("Y") ; $i++) { ?>
                <option value="<?php echo $i; ?>" <?if(Date("Y") == $i){ echo "selected"; }?> ><?php echo $i; ?></option>
         <?php } ?>
        </select>
     </div>
     </div>

     <br>
         <div id="sum_tb"></div>
     </div>
</div>
</div>
</div>
<script>
    $(function () {
        $("#sum_tb").load("summary/sum_table.php",{ year :$("#year").val() });
    });

    function chy() {
        var year = $("#year").val();
        $("#sum_tb").load("summary/sum_table.php",{ year : year});
    }
</script>
