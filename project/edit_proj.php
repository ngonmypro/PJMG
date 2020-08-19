<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'];
?>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
                <form id="form_pro" data-parsley-validate class="form-horizontal form-label-left">
                <?php $sql_eproS = 'SELECT * FROM tbl_proj WHERE ProjID = "'.$_POST['id'].'" ';
                      $objeproS = mysql_query($sql_eproS)?>
                      <?php while ($rowe = mysql_fetch_array($objeproS)) { ?>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php $sql_aproS = 'SELECT * FROM tbl_type';
                            $objaproS = mysql_query($sql_aproS)?>
                        <select class="form-control" id="typepe" disabled>
                        <?php while ($row = mysql_fetch_array($objaproS)) { ?>
                          <option value="<?php echo $row['TypeID'];?>" <?if($row['TypeID'] == $rowe['ProTypeID']){ echo "selected"; }?> ><?php echo $row['TypeName'];?></option>
                        <?php }?>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="statuspe" disabled>
                          <option value="1" <?if($rowe['ProStatus'] == 1){ echo "selected"; }?>>Open</option>
                          <option value="2" <?if($rowe['ProStatus'] == 2){ echo "selected"; }?>>On Hold</option>
                          <option value="3" <?if($rowe['ProStatus'] == 3){ echo "selected"; }?>>Closed</option>
                          <option value="4" <?if($rowe['ProStatus'] == 4){ echo "selected"; }?>>Cancelled</option>
                          <option value="5" <?if($rowe['ProStatus'] == 5){ echo "selected"; }?>>Complete</option>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="company">
                          <option value="" <?if($rowe['ProStatus'] == ""){ echo "selected"; }?>> # กรุณาเลือก บริษัท # </option>
                          <option value="YC" <?if($rowe['ProStatus'] == "YC"){ echo "selected"; }?>>YC</option>
                          <option value="YH" <?if($rowe['ProStatus'] == "YH"){ echo "selected"; }?>>YH</option>
                          <option value="PT" <?if($rowe['ProStatus'] == "PT"){ echo "selected"; }?>>PT</option>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="namep" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="namepe" class="form-control col-md-7 col-xs-12" type="text" name="pro-name" value="<? echo $rowe['ProName'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Leader</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php $sql_auser4 = 'SELECT * FROM tbl_users';
                            $objauser4 = mysql_query($sql_auser4)?>
                        <select class="form-control" id="luserpe" disabled>
                        <?php while ($row4 = mysql_fetch_array($objauser4)) { ?>
                          <option value="<? echo $row4['UserSname'];?>" <?if($row4['UserSname'] == $rowe['ProTeamL']){ echo "selected"; }?>><? echo $row4['UserSname']; ?></option>
                          <?php }?>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Team</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                           <div id="team"></div>
                           <button type="button" class="btn btn-info btn-sm" onclick="javascript:btn_team_edit(<?=$rowe['ProjID']?>);">แก้ไขทีม</button>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Start
                        </label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                        <div class='input-group date' id='date1'>
                            <input type='date' class="form-control"  id="datestarte" value="<? echo $rowe['ProDateStart'];?>" disabled>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Stop
                        </label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                        <div class='input-group date' id='date2'>
                            <input type='date' class="form-control" id="dateende" value="<? echo $rowe['ProDateEnd'];?>" disabled>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pro-detail" class="control-label col-md-3 col-sm-3 col-xs-12">Detail</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="detailpe" class="form-control col-md-7 col-xs-12" type="text" name="pro-detail"><? echo $rowe['ProDetail'];?></textarea>
                        </div>
                      </div>
                      <?php $sql_aps = 'SELECT * FROM tbl_proj WHERE ProjID = "'.$_POST['id'].'"';
                            $objaps = mysql_query($sql_aps); ?>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Lavel Program</label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <select class="form-control" id="lvpe">
                          <?php while ($rowep = mysql_fetch_array($objaps)) { ?>
                          <option value="" <?if($rowep['ProLavel'] == ""){ echo "selected"; }?>> # กรุณาเลือกขนาดโปรเจ็ค # </option>
                          <option value="1" <?if($rowep['ProLavel'] == 1){ echo "selected"; }?>>โปรแกรมขนาดเล็ก</option>
                          <option value="2" <?if($rowep['ProLavel'] == 2){ echo "selected"; }?>>โปรแกรมขนาดกลาง</option>
                          <option value="3" <?if($rowep['ProLavel'] == 3){ echo "selected"; }?>>โปรแกรมขนาดใหญ่</option>
                        <?php } ?>
                        </select>
                      </div>
                      </div>
                          <?php } ?>
                    </form>

<script>
    CKEDITOR.replace( 'detailpe' );

    $("#team").load("project/edit_team_show.php",{ id : <?php echo $_POST['id'];?>});
</script>
