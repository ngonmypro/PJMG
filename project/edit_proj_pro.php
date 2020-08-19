<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'],' ',$_POST["typep"],' ',$_POST["namep"];

$sql_ped = 'UPDATE tbl_proj SET ProName = "'.$_POST["namepe"].'" , ProCompany = "'.$_POST["company"].'" , ProTypeID = "'.$_POST["typepe"].'" , ProStatus = "'.$_POST["statuspe"].'" , ProTeamL = "'.$_POST["luserpe"].'" , ProDateStart = "'.$_POST["datestarte"].'",
 ProDateEnd = "'.$_POST["dateende"].'",ProDetail = "'.$_POST["detailpe"].'",ProLavel = "'.$_POST['lvpe'].'",ProEditDate = NOW(),ProEditUser = "'.$_SESSION["ssUserID"].'" WHERE ProjID = "'.$_POST["id"].'" ';
$result_ped = mysql_query($sql_ped) or die(mysql_error());

/*if ($_POST['statuspe'] == 5) {
    $sql_ped2 = 'UPDATE tbl_proj SET ProDateStu = NOW() , ProPer = "100" WHERE ProjID = "'.$_POST['id'].'"';
    $result_ped2 = mysql_query($sql_ped2) or die(mysql_error());
}elseif ($_POST['statuspe'] == 3 || $_POST['statuspe'] == 4 || $_POST['statuspe'] == 2) {
    $sql_ped3 = 'UPDATE tbl_proj SET ProDateStu = NOW() WHERE ProjID = "'.$_POST['id'].'"';
    $result_ped3 = mysql_query($sql_ped3) or die(mysql_error());
}*/

mysql_close($c);
echo "Y";
?>
