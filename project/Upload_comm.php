<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<form data-parsley-validate class="form-horizontal form-label-left">
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="useru">Upload File
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="file" id="fliecom" class="form-control col-md-7 col-xs-12">
  </div>
</div>
</form>
