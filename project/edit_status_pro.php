<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['typed1'],'/',$_POST['id'];

if ($_POST['editstu'] == 5) {
    $sql_ped2 = 'UPDATE tbl_proj SET ProStatus = "'.$_POST['editstu'].'" , ProDateStu = NOW(),ProEditDate = NOW() , ProPer = "100" WHERE ProjID = "'.$_POST['id'].'"';
    $result_ped2 = mysql_query($sql_ped2) or die(mysql_error());
}elseif ($_POST['editstu'] == 3 || $_POST['editstu'] == 4 || $_POST['editstu'] == 2 || $_POST['editstu'] == 1) {
    $sql_ped3 = 'UPDATE tbl_proj SET ProStatus = "'.$_POST['editstu'].'" , ProDateStu = NOW(),ProEditDate = NOW() WHERE ProjID = "'.$_POST['id'].'"';
    $result_ped3 = mysql_query($sql_ped3) or die(mysql_error());
}

echo "Y";
?>
