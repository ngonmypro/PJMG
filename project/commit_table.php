  <?php
date_default_timezone_set("Asia/Bangkok");
  include '../js/conn.php';
  ?>

            <table id="tablecommit" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ข้อความ</th>
                        <th>User</th>
                        <th>วันที่</th>
                        <th>ไฟล์</th>
                        <th>อัพโหลด</th>
                    </tr>
                </thead>
             <?php $sql_proCo = 'SELECT * FROM tbl_commit,tbl_users WHERE ComProID = "'.$_POST['id'].'" and ComUserID = UserID ORDER BY ComID DESC';
                    $objproCo = mysql_query($sql_proCo)?>
                <tbody>
                <?php while ($rowCo = mysql_fetch_array($objproCo)) { ?>
<?$comid = $rowCo['ComID'];?>
                    <tr>
                        <td><?php echo $rowCo['Committ'];?></td>
                        <td><?php echo $rowCo['UserSname'];?></td>
                        <td><?php echo $rowCo['ComDate'];?></td>
                        <td><div id="filec<?php echo $comid; ?>" ></div></td>
                        <script>
                        $("#filec<?php echo $comid; ?>").load("project/file_commit",{ id : <?echo $comid;?>});
                        </script>
                        <td>
                         <button type="button" class="btn btn-info btn-xs" onclick="javascript:btn_com_up(<?=$rowCo['ComID']?>,<?=$rowCo['ComProID']?>);" ><i class="fa fa-upload"></i> Upload</button>
                         </td>
                    </tr>

                <? } ?>
                </tbody>
             </table>
             <script>
                 $(function() {
                     $("#tablecommit").DataTable();
                    });
             </script>
