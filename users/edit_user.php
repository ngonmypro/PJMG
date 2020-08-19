<?php date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<?php //echo $_POST['id'];?>

<?php $sql_userE = 'SELECT * FROM tbl_users,tbl_status WHERE UserStatus = StaID and UserID = "'.$_POST['id'].'"';
     $objuserE = mysql_query($sql_userE)?>
<div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<?php while ($row1 = mysql_fetch_array($objuserE)) { ?>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="userue">Username <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="text" id="userue" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row1['UserName'];?>" >
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passue">Password <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="password" id="passue" name="last-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row1['UserPass'];?>" >
  </div>
</div>
<div class="form-group">
  <label for="nameue" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input id="nameue" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" value="<?php echo $row1['UserSname'];?>" >
  </div>
 </div>
<div class="form-group">
  <label for="statusue" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <?php $sql_userSta = 'SELECT * FROM tbl_status';
          $objuserSta = mysql_query($sql_userSta)?>
             <select class="form-control" id="statusue">
                  <?php while ($row2 = mysql_fetch_array($objuserSta)) { ?>
                   <option value="<?php echo $row2['StaID'];?>" <?php if($row2['StaID'] == $row1['UserStatus']){ echo "selected"; }?> ><?php echo $row2['StaName'];?></option>
                  <?php }?>
            </select>
  </div>
  </div>
  <?php }?>
  <div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
  <div class="col-md-6 col-sm-6 col-xs-12">
  <div id="edite" class="text-danger"></div>
  </div>
  </div>
</div>
