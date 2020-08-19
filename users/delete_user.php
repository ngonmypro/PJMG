<?php session_start();
date_default_timezone_set("Asia/Bangkok");
    include '../js/conn.php';

    //echo $_POST['id'],' ',$_POST['iddelete'];
    $sql_delu = 'DELETE FROM tbl_users WHERE UserID = "'.$_POST["id"].'" ';
    $result_delu = mysql_query($sql_delu) or die(mysql_error());

    mysql_close($c);
    echo "Y";
?>
