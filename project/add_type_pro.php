<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';

//echo $_POST['typep'];
$sql_typea = 'INSERT INTO tbl_type (TypeID, TypeName,TypeAddDate,TypeAddUser,TypeEditDate,TypeEditUser) VALUES (NULL, "'.$_POST['typep1'].'",NOW(),"'.$_SESSION['ssUserSname'].'",NOW(),"'.$_SESSION['ssUserSname'].'")';
$resulttypea = mysql_query($sql_typea) OR die(mysql_error());

echo  "Y";

?>
