<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
?>
<? $sql_ts = 'SELECT * FROM tbl_type WHERE TypeID = "'.$_POST['id'].'"';
   $resultts = mysql_query($sql_ts) OR die(mysql_error());
   ?>
<form data-parsley-validate class="form-horizontal form-label-left">
    <? while ($row = mysql_fetch_array($resultts)) {?>

    <div class="form-group">
        <label for="typep" class="control-label col-md-3 col-sm-3 col-xs-12">Type Name</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
        <input id="typed1" class="form-control col-md-7 col-xs-12" type="text" value="<? echo $row['TypeName'];?>">
        </div>
    </div>
    <?}?>
</form>
