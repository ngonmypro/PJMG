<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<div class="page-title">
    <div class="title_left">
     <h3>Type Management <small>Listing design</small></h3>
         </div>
    </div>
<div class="row">
 <div class="col-md-12">
    <div class="x_panel">
     <div class="x_title">
        <h2>Type</h2>
       <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
           <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
             </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
         <li><a class="close-link"><i class="fa fa-close"></i></a>
         </li>
       </ul>
       <div class="clearfix"></div>
     </div>
     <div class="x_content">
    <table id="tabletype" class="table table-striped table-bordered">
            <thead>
                 <tr>
                    <th>TypeName</th>
                    <th>แก้ไข/ลบ</th>
                 </tr>
                </thead>
                <?php $sql_userS = 'SELECT * FROM tbl_type';
                      $objuserS = mysql_query($sql_userS)?>
                <tbody>
                    <?php while ($row = mysql_fetch_array($objuserS)) {
                           $tid = $row['TypeID'];
                           $name = $row['TypeName'];
                    ?>
                     <tr>
                        <td><?php echo $name;?></td>
                        <td>
                             <a href="javascript:btn_edit_type(<?=$tid?>);" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i> Edit </a>
                             <a href="javascript:btn_delete_type(<?=$tid?>,'<?=$name?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                         </td>
                    </tr>
                   <?php }mysql_close($c);?>
                </tbody>
         </table>
     </div>
</div>
</div>
</div>
<script>
    $(function() {
       $("#tabletype").DataTable();
    });
</script>
