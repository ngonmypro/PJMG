<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
 //echo $_POST['id'],$_POST['commitd'];
 $id = $_POST["id"];
$sql_cim = 'INSERT INTO tbl_commit (ComID,ComProID,Committ,ComDate,ComUserID) VALUES (NULL,"'.$id.'","'.$_POST["commitd"].'",NOW(),"'.$_SESSION["ssUserID"].'") ';
$result_cim = mysql_query($sql_cim) or die(mysql_error());

$sql_pjup = 'UPDATE tbl_proj SET ProPer = "'.$_POST["proper"].'" WHERE ProjID = "'.$id.'" ';
$result_pjup = mysql_query($sql_pjup) or die(mysql_error());

mysql_close($c);
echo "Y";
?>
