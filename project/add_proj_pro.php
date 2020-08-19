<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST["typep"],' ',$_POST["namep"];
$sql_proj = 'INSERT INTO tbl_proj (ProjID,ProName,ProCompany,ProTypeID,ProStatus,ProTeamL,ProTeam,ProPer,ProDateStart,ProDateEnd,ProDetail,ProLavel,ProCreateDate,ProCreateUser,ProEditDate,ProEditUser) VALUES (NULL,"'.$_POST['namep'].'","'.$_POST['company'].'","'.$_POST['typep'].'","'.$_POST['statusp'].'","'.$_POST['luserp'].'","'.$_POST['userp'].'","0","'.$_POST['datestart'].'","'.$_POST['dateend'].'","'.$_POST['detailp'].'","'.$_POST['lvp'].'",NOW(),"'.$_SESSION['ssUserID'].'",NOW(),"'.$_SESSION['ssUserID'].'") ';
$result_proj = mysql_query($sql_proj) or die(mysql_error());

mysql_close($c);
echo "Y";
?>
