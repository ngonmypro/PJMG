<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
?>
 <?php $sql_Co = 'SELECT * FROM tbl_up_com WHERE UpcComID = "'.$_POST['id'].'"';
       $objCo = mysql_query($sql_Co)?>
       <?php while ($rowCo = mysql_fetch_array($objCo)) { ?>
        <a href="../PJMG/filecommit/<?php echo $rowCo['UpcFile'];?>" target="_blank"><p class="glyphicon glyphicon-download-alt"></p><?php echo $rowCo['UpcFile'];?></a>
        <button type="button" class="btn btn-danger btn-xs" onclick="javascript:btn_cdel_up(<?=$rowCo['UpcID']?>,<?=$rowCo['UpcComID']?>,'<?=$rowCo["UpcFile"]?>');" ><i class="fa fa-trash-o"></i></button><br>
       <? } ?>
