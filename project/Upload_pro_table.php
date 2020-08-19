<?php
date_default_timezone_set("Asia/Bangkok");
  include '../js/conn.php';
  ?>

            <table id="Upload_table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ไฟล์</th>
                        <th>User</th>
                        <th>วันที่</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
             <?php $sql_proup = 'SELECT * FROM tbl_up_pro,tbl_users WHERE UpProID = "'.$_POST['id'].'" and UpUserID = UserID';
                    $objproup = mysql_query($sql_proup)?>
                <tbody>
                <?php while ($rowup = mysql_fetch_array($objproup)) { ?>
                    <tr>
                        <td><a href="../PJMG/filecommit/<?php echo $rowup['UpFile'];?>" target="_blank"><p class="glyphicon glyphicon-download-alt"></p><?php echo ' ',$rowup['UpFile'];?></a></td>
                        <td><?php echo $rowup['UserSname'];?></td>
                        <td><?php echo $rowup['UPDateTime'];?></td>
                        <td><button type="button" class="btn btn-danger btn-xs" onclick="javascript:btn_pdel_up(<?=$rowup['UpID']?>,<?=$rowup['UpProID']?>,'<?=$rowup["UpFile"]?>');" ><i class="fa fa-trash-o"></i> Delete</button></td>
                    </tr>
                <? } ?>
                </tbody>
             </table>
             <script>
                 $(function() {
                     $("#Upload_table").DataTable();
                    });
             </script>
