<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';

$sql_proV = 'SELECT * FROM tbl_proj,tbl_type,tbl_users WHERE ProTypeID = TypeID and ProCreateUser = UserID and ProjID = "'.$_POST['id'].'"';
$objproV = mysql_query($sql_proV)

?>
<?php while ($rowV = mysql_fetch_array($objproV)) { ?>
    <form id="form_pro" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php $sql_aproV = 'SELECT * FROM tbl_type WHERE TypeID = "'.$rowV['ProTypeID'].'" ';
                            $objaproV = mysql_query($sql_aproV)?>
                        <?php while ($row1 = mysql_fetch_array($objaproV)) { ?>
                        <div><h5><? echo $row1['TypeName']; ?></h5></div>
                      <?  }?>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div><h5>  <?if($rowV['ProStatus'] == 1){ echo "Open"; }?></div>
                      <div><h5>  <?if($rowV['ProStatus'] == 2){ echo "On Hold"; }?></div>
                      <div><h5>  <?if($rowV['ProStatus'] == 3){ echo "Closed"; }?></div>
                      <div><h5>  <?if($rowV['ProStatus'] == 4){ echo "Cancelled"; }?></div>
                      <div><h5>  <?if($rowV['ProStatus'] == 5){ echo "Complete"; }?></div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="namep" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <div><h5><? echo $rowV['ProName']; ?></h5></div>
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Team Leader</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div><h5><? echo $rowV['ProTeamL']; ?></h5></div>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Team</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div><h5><? echo $rowV['ProTeam']; ?></h5></div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Start
                        </label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                        <div><h5><span class="glyphicon glyphicon-calendar"></span><? echo $rowV['ProDateStart']; ?></h5></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Stop
                        </label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                        <div><h5><span class="glyphicon glyphicon-calendar"></span><? echo $rowV['ProDateEnd']; ?></h5></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pro-detail" class="control-label col-md-3 col-sm-3 col-xs-12">Detail</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <div><h5><? echo $rowV['ProDetail']; ?></h5></div>
                        </div>
                      </div>
                    </form>

<hr>
<section>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <button type="button" class="btn btn-info" onclick="javascript:btn_commit(<?=$rowV['ProjID']?>,<?=$_POST['idus']?>);">commit</button>
            <button type="button" class="btn btn-info" onclick="javascript:reload(<?=$rowV['ProjID']?>);">reLoad</button>
        </div>
        </div class="col-md-6 col-ms-6 col-xs-12">
                            <div id="comtable"></div>
        </div>
    </div>
</section>
<? } ?>
<script>
    $("#comtable").load("project/commit_table.php",{ id : <?php echo $_POST['id'];?> });
</script>
