<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>

<table id="tablepro" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>สถานะ</th>
                          <th>ผู้สร้างโปรเจค</th>
                          <th>บริษัท</th>
                          <th>ชื่อโปรเจค</th>
                          <th>ประเภท</th>
                          <th>ขนาดโปรเจ็ค</th>
                          <th>ผู้ดูแล</th>
                          <th>ทีมพัฒนา</th>
                          <th>ความคืบหน้า</th>
                          <th>วันที่เริ่ม</th>
                          <th>วันที่สิ้นสุด</th>
                          <th>รายละเอียด
                          <?if ($_SESSION['ssUserStatus'] == 1) {?>
                          /แก้ไข/ลบ
                          <? } ?>
                          </th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th id="staa">สถานะ</th>
                          <th>ผู้สร้างโปรเจค</th>
                          <th>บริษัท</th>
                          <th>ชื่อโปรเจค</th>
                          <th>ประเภท</th>
                          <th>ขนาดโปรเจ็ค</th>
                          <th>ผู้ดูแล</th>
                          <th>ทีมพัฒนา</th>
                          <th>ความคืบหน้า</th>
                          <th>วันที่เริ่ม</th>
                          <th>วันที่สิ้นสุด</th>
                          <th></th>
                        </tr>
                      </tfoot>
                      <?php
                            $idsta = $_POST['stapr'];
                            $useridp = $_POST['uid'];
                            $sql_proS = 'SELECT * FROM tbl_proj,tbl_type,tbl_users WHERE ProTypeID = TypeID and ProCreateUser = UserID';
                            if($_POST['stapr'] != 0){
                                $sql_proS.=' and ProStatus = "'.$_POST['stapr'].'" ';
                            }
                            if($_POST['uid'] != 0){
                                $sql_proS.=' and ProCreateUser = "'.$_POST['uid'].'" ';
                            }
                        $objproS = mysql_query($sql_proS)?>
                      <tbody>
                      <?php while ($row = mysql_fetch_array($objproS)) { ?>
                        <?php if ($row['ProStatus'] == 1) {
                              $statusp = "<h4><span class='label label-primary'>Open</span></h4>";
                          }elseif ($row['ProStatus'] == 2) {
                            $statusp =  "<h4><span class='label label-default'>On Hold</span></h4>";
                          }elseif($row['ProStatus'] == 3){
                            $statusp =  "<h4><span class='label label-warning'>Closed</span></h4>";
                          }elseif($row['ProStatus'] == 4){
                            $statusp =  "<h4><span class='label label-danger'>Cancelled</span></h4>";
                          }elseif($row['ProStatus'] == 5){
                            $statusp =  "<h4><span class='label label-success'>Complete</span></h4>";
                          }

                          if ($row['ProLavel'] == 1) {
                            $lv = "Small";
                          }elseif ($row['ProLavel'] == 2) {
                            $lv = "Meddle";
                          }elseif ($row['ProLavel'] == 3) {
                            $lv = "Big";
                          }else {
                            $lv = "No Lavel";
                          }

                          ?>
                        <tr>
                          <td>
                            <?php echo $statusp;
                                  if($row['ProStatus'] == 5 || $row['ProStatus'] == 4 || $row['ProStatus'] == 3|| $row['ProStatus'] == 2)
                                  { echo '<small>',$row['ProDateStu'],'</small>'; }?>
                          </td>
                          <td><p><? echo $row['UserSname'];?></p>
                          <small>Create:<?php echo $row['ProCreateDate']; ?></small></td>
                          <td><?php echo $row['ProCompany']; ?></td>
                          <td><?php echo $row['ProName'];?>
                          </td>
                          <td><?php echo $row['TypeName'];?></td>
                          <td><?php echo $lv; ?></td>
                          <td><?php echo $row['ProTeamL'];?></td>
                          <td><?php echo $row['ProTeam'];?></td>
                          <td>
                          <?php $nowd = strtotime(date("Y-m-d"));
                                $endd = strtotime($row['ProDateEnd']);
                                $sum = ceil(abs($endd - $nowd) / 86400);
                                //echo $nowd,'/',$endd,'<br>';
                          //echo $sum;
                          //$sum = $row['ProDateEnd'] - date("Y-m-d");?>

                          <div class="progress progress_sm">
                            <?if($row['ProStatus'] == 1 || $row['ProStatus'] == 2) {?>
                              <?php if (date("Y-m-d") < $row['ProDateEnd'] && $sum <= 7 ){ ?>
                              <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="<?php echo $row['ProPer'];?>" style="width:<?php echo $row['ProPer'];?>%;"></div>
                             </div> <!--Last 7 day-->
                             <small><?php echo $row['ProPer']; ?>% Complete </small><span class="badge bg-orange"><?echo  $sum ; ?></span>
                             <?php }elseif (date("Y-m-d") > $row['ProDateEnd']){ ?>
                              <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php echo $row['ProPer'];?>" style="width:<?php echo $row['ProPer'];?>%;"></div>
                             </div><!--Over End Date-->
                             <small><?php echo $row['ProPer']; ?>% Complete </small><span class="badge bg-red"><?echo  $sum ; ?></span><? }else{ ?>
                              <div class="progress-bar bg-blue-sky" role="progressbar" data-transitiongoal="<?php echo $row['ProPer'];?>" style="width:<?php echo $row['ProPer'];?>%;"></div>
                             </div><!--In Work-->
                             <small><?php echo $row['ProPer']; ?>% Complete </small><span class="badge bg-blue-sky"><?echo  $sum ; ?></span><? }?>
                            <!--/////////////////////////////////////////////////////////////////////////-->
                             <? }elseif($row['ProStatus'] == 3 || $row['ProStatus'] == 4) {?>
                              <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="<?php echo $row['ProPer'];?>" style="width:<?php echo $row['ProPer'];?>%;"></div>
                             </div>
                             <small><?php echo $row['ProPer']; ?>% Complete </small>
                              <!--/////////////////////////////////////////////////////////////////////////-->
                             <? }elseif($row['ProStatus'] == 5) {?>
                              <?php if ($row['ProDateStu'] > $row['ProDateEnd'] && $row['ProStatus'] == 5){ ?>
                              <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php echo $row['ProPer'];?>" style="width:<?php echo $row['ProPer'];?>%;"></div>
                             </div> <!--Comp Over End Day-->
                             <?
                                  $nowc1 = strtotime($row['ProDateStu']);
                                  $endc1 = strtotime($row['ProDateEnd']);
                                  $sumc1 = ceil(abs($endc1 - $nowc1) / 86400);
                                  ?>
                             <small><?php echo $row['ProPer']; ?>% Complete </small><span class="badge bg-red"><?echo  $sumc1 ; ?></span>
                              <?}else{?>
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $row['ProPer'];?>" style="width:<?php echo $row['ProPer'];?>%;"></div>
                             </div>
                                  <?
                                  $nowc2 = strtotime($row['ProDateStu']);
                                  $endc2 = strtotime($row['ProDateEnd']);
                                  $sumc2 = ceil(abs($endc2 - $nowc2) / 86400);
                                  ?>
                             <small><?php echo $row['ProPer']; ?>% Complete </small>
                             <? if($row['ProDateEnd'] == $row['ProDateStu']){?>
                              <span class="badge bg-green">0</span>
                              <?}else{ ?>
                                <span class="badge bg-green"><?echo  $sumc2 ; ?></span> <!--End befor EndDay-->
                             <?} }?>
                            <? } ?>
                          </td>
                          <td><?php echo $row['ProDateStart'];?></td>
                          <td><?php echo $row['ProDateEnd'];?></td>
                          <td>
                            <? $id= $row['ProjID'];
                              $name = $row['ProName'];
                            ?>
                          <?if (isset($useridp)) {?>
                          <a href="javascript:btn_view_pro(<?=$id?>,'<?=$name?>',<?=$useridp?>);" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <? }else{?>
                            <a href="javascript:btn_view_pro(<?=$id?>,'<?=$name?>');" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                          <? } ?>
                          <?if ($_SESSION['ssUserID'] == $row['UserID'] || $_SESSION['ssUserStatus'] == 1 ) {?>
                          <a href="javascript:btn_upload_view(<?=$id?>,'<?=$name?>');" class="btn btn-info btn-xs"><i class="fa fa-upload"></i> UpLoadFile </a>
                          <a href="javascript:btn_edit_sta(<?=$id?>,<?=$useridp?>);" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit Status </a>
                          <? } ?>
                          <?if ($_SESSION['ssUserStatus'] == 3) {?>
                          <a href="javascript:btn_edit_pro(<?=$id?>);" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <?}elseif ($_SESSION['ssUserStatus'] == 1) {?>
                          <a href="javascript:btn_edit_pro(<?=$id?>,<?=$useridp?>);" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <a href="javascript:btn_del_pro(<?=$id?>,<?=$useridp?>,'<?=$name?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          <? } ?>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                    <script>
    $(function() {
      $('#tablepro').DataTable();
      var table = $('#tablepro').DataTable();
      //table.cells('#staa').select();
    });
    //กำหนดส่วน footer ให้มีช่องพิมพ์ textbox สำหรับค้นหา
		$('#tablepro tfoot th').each( function () {
      var title = $(this).text();
			if((title != '') && (title !='รายละเอียด') && (title !='ความคืบหน้า') && (title !='รายละเอียด /แก้ไข/ลบ') ){
        $(this).html( '<input type="text" placeholder=" '+title+'" style="width:90%;"  />' );
			}else{
				$(this).html(' ');
			}
		} );

		// Apply the search ค้นหาจาก footer ------------------------
		$('#tablepro').DataTable().columns().every( function () {
			var that = this;
			//ค้นหาจาก footer
			$( 'input', this.footer() ).on( 'keyup change', function () {
				if ( that.search() !== this.value ) {
					that
						.search( this.value )
						.draw();
				}
			} );
		} );
</script>
