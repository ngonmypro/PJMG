<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
?>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
                <form id="form_pro" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Type</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <div id="type"></div>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-12"><button type="button" class="btn btn-info btn-xs" onclick="javascript:btn_type_add();">Add Type</button></div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="statusp">
                          <option value="1" >Open</option>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="company">
                          <option value=""> # กรุณาเลือก บริษัท # </option>
                          <option value="YC" >YC</option>
                          <option value="YH" >YH</option>
                          <option value="PT" >PT</option>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="namep" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="namep" class="form-control col-md-7 col-xs-12" type="text" name="pro-name">
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Leader</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php $sql_auser4 = 'SELECT * FROM tbl_users  WHERE UserID != 3 and UserID != 4 and UserID != 16';
                            $objauser4 = mysql_query($sql_auser4);?>
                        <select class="form-control" id="luserp">
                          <option value=""> # กรุณาเลือก Head หลัก # </option>
                        <?php while ($row4 = mysql_fetch_array($objauser4)) { ?>
                          <option value="<? echo $row4['UserSname']; ?>" ><? echo $row4['UserSname']; ?></option>
                          <?php }?>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Team</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php $sql_auserS = 'SELECT * FROM tbl_users  WHERE UserID != 3 and UserID != 4 and UserID != 16';
                            $objauserS = mysql_query($sql_auserS);?>
                          <select name="" id="userp" multiple>
                          <?php while ($row3 = mysql_fetch_array($objauserS)) { ?>
                            <option value="<? echo $row3['UserSname']; ?>"><? echo $row3['UserSname']; ?></option>
                            <?php }?>
                          </select>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Start
                        </label>
                        <div class="col-md-6 col-ms-6 col-xs-12">
                        <div class='input-group date' id='date1'>
                            <input type='date' class="form-control"  id="datestart">
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
                            <input type='date' class="form-control" id="dateend">
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pro-detail" class="control-label col-md-3 col-sm-3 col-xs-12">Detail</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="detailp" class="form-control col-md-7 col-xs-12" type="text" name="pro-detail"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Lavel Program</label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <select class="form-control" id="lvp">
                          <option value=""> # กรุณาเลือกขนาดโปรเจ็ค # </option>
                          <option value="1">โปรแกรมขนาดเล็ก</option>
                          <option value="2">โปรแกรมขนาดกลาง</option>
                          <option value="3">โปรแกรมขนาดใหญ่</option>
                        </select>
                      </div>
                      </div>
                    </form>

<script>
    CKEDITOR.replace( 'detailp' );
    $("#type").load("project/type_show.php");
</script>
