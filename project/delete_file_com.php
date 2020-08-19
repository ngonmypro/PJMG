<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'],' ',$_POST["userue"];

$sql_cod = 'DELETE FROM tbl_up_com  WHERE UpcID = "'.$_POST["id"].'" ';
$result_cod = mysql_query($sql_cod) or die(mysql_error());

$filename = $_POST['name'];
//echo $filename;
$flgDelete = unlink("../filecommit/$filename");
mysql_close($c);
echo "Y";
?>
