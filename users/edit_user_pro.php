<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'],' ',$_POST["userue"];

$sql_ued = 'UPDATE tbl_users SET UserName = "'.$_POST["userue"].'" , UserPass = "'.$_POST["passue"].'" , UserSname = "'.$_POST["nameue"].'" , UserStatus = "'.$_POST["statusue"].'" , UserEditTime = NOW(), UserEditName = "'.$_SESSION["ssUserSname"].'" WHERE UserID = "'.$_POST["id"].'" ';
$result_ued = mysql_query($sql_ued) or die(mysql_error());

mysql_close($c);
echo "Y";
?>
