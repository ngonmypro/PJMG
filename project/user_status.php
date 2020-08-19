<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'];
?>
<form data-parsley-validate class="form-horizontal form-label-left">
<?php $sql_aps = 'SELECT * FROM tbl_proj WHERE ProjID = "'.$_POST['id'].'"';
      $objaps = mysql_query($sql_aps)?>
        <div class="form-group">
           <label for="pro-detail" class="control-label col-md-3 col-sm-3 col-xs-12">สถานะ</label>
           <div class="col-md-3 col-sm-3 col-xs-12">
           <select class="form-control" id="userstu">
               <?php while ($rowep = mysql_fetch_array($objaps)) { ?>
                <option value="1" <?if($rowep['ProStatus'] == 1){ echo "selected"; }?>>Open</option>
                <option value="2" <?if($rowep['ProStatus'] == 2){ echo "selected"; }?>>On Hold</option>
                <!--<option value="3" <?#if($rowep['ProStatus'] == 3){ echo "selected"; }?>>Closed</option>-->
                <option value="4" <?if($rowep['ProStatus'] == 4){ echo "selected"; }?>>Cancelled</option>
                <option value="5" <?if($rowep['ProStatus'] == 5){ echo "selected"; }?>>Complete</option>
                <?php  } ?>
           </select>
           </div>
        </div>
</form>
