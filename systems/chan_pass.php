<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
?>
<? $sql_pu = 'SELECT * FROM tbl_users WHERE UserID = "'.$_POST['id'].'"';
   $resultpu = mysql_query($sql_pu) OR die(mysql_error());
   ?>
<form data-parsley-validate class="form-horizontal form-label-left">
    <? while ($row = mysql_fetch_array($resultpu)) {?>
    <? echo $row['UserSname'];?>
    <div class="form-group">
        <label for="chpass" class="control-label col-md-3 col-sm-3 col-xs-12">Change Password</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
        <input id="chpass" class="form-control col-md-7 col-xs-12" type="password" value="<? echo $row['UserPass'];?>">
        </div>
    </div>
    <?}?>
</form>
