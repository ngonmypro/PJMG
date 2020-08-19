<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>

<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>

<div class="page-title">
    <div class="title_left">
     <h3>Project Management <small>Listing design</small></h3>
         </div>
    </div>
<div class="row">
 <div class="col-md-12">
    <div class="x_panel">
     <div class="x_title">
        <h2>Projects</h2>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
       <div class="row">
          <div class="col-md-1 text-right"><h4><label class="control-label">Status</label></h4></div>
        <div class="col-md-2">
          <select class="form-control selectpicker" data-live-search="true" id="projsta" onchange="javascript:statupro();">
            <option value="0" >ทั้งหมด</option>
            <option value="1" >Open</option>
            <option value="2" >On Hold</option>
            <option value="4" >Cancelled</option>
            <option value="5" >Complete</option>
          </select>
        </div>
        <div class="col-md-1 text-right"><h4><label class="control-label">Users</label></h4></div>
        <div class="col-md-2">
        <?php $sql_pus = 'SELECT * FROM tbl_users';
              $rspus = mysql_query($sql_pus) or die(mysql_error());?>
          <select class="selectpicker" data-live-search="true" id="projuid" onchange="javascript:usproid();" hidden>
            <option value="0" >ทั้งหมด</option>
            <?php while ($rowpus = mysql_fetch_array($rspus)) { ?>
            <option value="<?php echo $rowpus['UserID']; ?>" <?php if($_POST['idus'] == $rowpus['UserID']){ echo "selected"; } ?> ><?php echo $rowpus['UserSname']; ?></option>
           <?php } ?>
          </select>
        </div>
       </div>
          <div id="tableprojj"></div>
        </div>
     </div>
</div>
</div>
</div>
<script>
  $(function () {
    <?php if(!isset($_POST['idus'])){?>
     $("#tableprojj").load("project/proj_table.php");
    <?php }else{ ?>
      var uid = <?php echo $_POST['idus'];?>;
      //alert(uid);
      $("#tableprojj").load("project/proj_table.php",{ uid : uid });
    <?php } ?>
     });

    $('.selectpicker').selectpicker({
        style: 'btn-default',
        size: 10
    });



 function statupro() {
   var stapr = $("#projsta").val();
   $("#tableprojj").load("project/proj_table.php",{ stapr : stapr });
 }

 function usproid() {
   var uid = $("#projuid").val();
   $("#tableprojj").load("project/proj_table.php",{ uid : uid });
 }

</script>
