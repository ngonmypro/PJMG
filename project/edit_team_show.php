<?php
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';

//echo $_POST['id'];
$sql_team = 'SELECT * FROM tbl_proj WHERE ProjID = "'.$_POST['id'].'"';
$objteam = mysql_query($sql_team);
?>
<?php while ($rowt = mysql_fetch_array($objteam)) { ?>
<h4> <? echo $rowt['ProTeam'];?> </h4>
<? } ?>
