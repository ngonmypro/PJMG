<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'],' ',$_POST["teamed"];

$sql_Ted = 'UPDATE tbl_proj SET ProTeam = "'.$_POST["teamed"].'",ProEditDate = NOW(), ProEditUser = "'.$_SESSION['ssUserID'].'" WHERE ProjID = "'.$_POST["id"].'" ';
$result_Ted = mysql_query($sql_Ted) or die(mysql_error());

mysql_close($c);
echo "Y";
?>
