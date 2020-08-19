<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['typed1'],'/',$_POST['id'];

$sql_typeed = 'UPDATE tbl_type SET TypeName = "'.$_POST['typed1'].'", TypeEditDate = NOW() , TypeEditUser = "'.$_SESSION['ssUserSname'].'" WHERE TypeID = "'.$_POST['id'].'" ';
$resulttypeed = mysql_query($sql_typeed) OR die(mysql_error());

echo "Y";
?>
