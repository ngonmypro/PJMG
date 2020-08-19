<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
header("Content-type:application/json; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

$sql_pjcal = 'SELECT * FROM tbl_proj';
$rs_pjcal = mysql_query($sql_pjcal)  or die(mysql_error());

$sql_pjca = 'SELECT MAX(ProjID) AS allproj FROM tbl_proj ';
$rs_ca = mysql_query($sql_pjca);
$objca = mysql_fetch_assoc($rs_ca);
$summ = $objca['allproj'];
?>
 [
    <?php while ($row = mysql_fetch_array($rs_pjcal)) {
         $nowd = strtotime(date("Y-m-d"));
         $endd = strtotime($row['ProDateEnd']);
         $sum = ceil(abs($endd - $nowd) / 86400);?>
  {
    "title": "<?php echo $row['ProName']; ?>",
    "start": "<?php echo $row['ProDateStart'];?>",
    "end"  : "<?php echo $row['ProDateEnd'];?>",
    <?if($row['ProStatus'] == 1 || $row['ProStatus'] == 2) {?>
        <?php if (date("Y-m-d") < $row['ProDateEnd'] && $sum <= 7 ){ ?>
            "color": "#EF9415"
        <?php }elseif (date("Y-m-d") > $row['ProDateEnd']){ ?>
            "color": "#FA0303"
        <?php }else{ ?>
            "color": "#1E7FC0"
        <?php } ?>
    <?php }elseif($row['ProStatus'] == 3 || $row['ProStatus'] == 4) {?>
        "color": "#C0BEBA"
    <?php }elseif($row['ProStatus'] == 5) {?>
        <?php if ($row['ProDateStu'] > $row['ProDateEnd'] && $row['ProStatus'] == 5){ ?>
            "color": "#F50516"
        <?php }else{?>
            "color": "#0A851C"
        <? } ?>
    <? } ?>
  } <?php if($summ == $row['ProjID']){

  } else{
      echo ",";
  } } ?>
]
