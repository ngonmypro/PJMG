<?php session_start();
date_default_timezone_set("Asia/Bangkok");
    include '../js/conn.php';

    //echo $_POST['id'],' adsadsasdas';
    $sql_typeid = 'DELETE FROM tbl_type WHERE TypeID = "'.$_POST["id"].'" ';
    $result_typeid = mysql_query($sql_typeid) or die(mysql_error());

    mysql_close($c);
    echo "Y";
?>
