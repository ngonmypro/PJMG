<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
?>
<?php $sql_aproS = 'SELECT * FROM tbl_type';
                            $objaproS = mysql_query($sql_aproS)?>
                        <select class="form-control" id="typep" >
                        <?php while ($row = mysql_fetch_array($objaproS)) { ?>
                          <option value="<?php echo $row['TypeID'];?>" ><?php echo $row['TypeName'];?></option>
                        <?php }?>
                        </select>
