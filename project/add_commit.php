<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';
//echo $_POST['id'];
?>

<form data-parsley-validate class="form-horizontal form-label-left">
        <div class="form-group">
           <label for="pro-detail" class="control-label col-md-3 col-sm-3 col-xs-12">Detail</label>
           <div class="col-md-9 col-sm-9 col-xs-12">
               <textarea id="commitd" class="form-control col-md-7 col-xs-12" type="text" ></textarea>
           </div>
        </div>
        <div class="form-group">
           <label for="pro-detail" class="control-label col-md-3 col-sm-3 col-xs-12">ความคืบหน้า</label>
           <div class="col-md-3 col-sm-3 col-xs-12">
           <input id="proper" class="form-control col-md-7 col-xs-12" type="number" >
           </div>
        </div>
</form>
<script>
    CKEDITOR.replace( 'commitd' );
</script>
