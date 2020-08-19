<?php session_start();
date_default_timezone_set("Asia/Bangkok");
    include '../js/conn.php';

    //echo $_POST['id'],' adsadsasdas';
    $sql_comd = 'DELETE FROM tbl_commit WHERE ComProID = "'.$_POST["id"].'" ';
    $result_comd = mysql_query($sql_comd) or die(mysql_error());

    $sql_delp = 'DELETE FROM tbl_proj WHERE ProjID = "'.$_POST["id"].'" ';
    $result_delp = mysql_query($sql_delp) or die(mysql_error());

    mysql_close($c);
    echo "Y";
?>
