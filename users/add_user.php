<?php date_default_timezone_set("Asia/Bangkok");
 include '../js/conn.php';
?>
<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="useru">Username <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="useru" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passu">Password <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="password" id="passu" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
  </div>
</div>
<div class="form-group">
  <label for="nameu" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="nameu" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
  </div>
 </div>
<div class="form-group">
  <label for="statusu" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <?php $sql_userSta = 'SELECT * FROM tbl_status';
          $objuserSta = mysql_query($sql_userSta)?>
             <select class="form-control" id="statusu">
                  <?php while ($row = mysql_fetch_array($objuserSta)) { ?>
                   <option value="<?php echo $row['StaID'];?>" ><?php echo $row['StaName'];?></option>
                  <?php }?>
            </select>
  </div>
  </div>
</div>
