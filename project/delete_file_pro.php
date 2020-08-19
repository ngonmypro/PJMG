<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'],' ',$_POST["userue"];

$file = $_POST['name'];
if (unlink("../filecommit/".$file))
  {
    $sql_cod = 'DELETE FROM tbl_up_pro WHERE UpID = "'.$_POST['id'].'" ';
    $result_cod = mysql_query($sql_cod) or die(mysql_error());

    echo "Y";
  }
  mysql_close($c);


?>
