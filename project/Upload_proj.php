<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<section>
    <div class="row">
        </div class="col-md-6 col-ms-6 col-xs-12">
                <div id="uploadtable"></div>
        </div>
    </div>
</section>
<script>
    $("#uploadtable").load("project/Upload_pro_table.php",{ id : <?php echo $_POST['id'];?>});
</script>
