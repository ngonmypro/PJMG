<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['useru'],' ',$_POST['passu'],' ',$_POST['nameu'],' ',$_POST['statusu'];

$sql_addu = 'INSERT INTO tbl_users (UserID,UserName,UserPass,UserSname,UserStatus,UserAddTime,UserEditTime,UserAddName,UserEditName) VALUES (NULL,"'.$_POST["useru"].'","'.$_POST["passu"].'", "'.$_POST["nameu"].'", "'.$_POST["statusu"].'",NOW(),NOW(),"'.$_SESSION["ssUserSname"].'","'.$_SESSION["ssUserSname"].'") ';
$result_addu = mysql_query($sql_addu) or die(mysql_error());

mysql_close($c);
echo "Y";


?>
