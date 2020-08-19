<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['typed1'],'/',$_POST['id'];

$usermd = MD5($_POST['chpass']);

$sql_ped = 'UPDATE tbl_users SET UserPass = "'.$usermd.'", UserEditTime = NOW() , UserEditName = "'.$_SESSION['ssUserSname'].'" WHERE UserID = "'.$_POST['id'].'" ';
$resultped = mysql_query($sql_ped) OR die(mysql_error());
//echo $usermd;
echo "Y";
?>
