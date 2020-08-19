<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<div class="row" >
  <div class="col-md-3">
    <table class="table table-striped table-bordered">
      <?php
        //----------------------------------------------
        $sql_yesum = 'SELECT COUNT(ProjID) AS allproj FROM tbl_proj ';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum.= ' WHERE  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum.= ' WHERE  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum = mysql_query($sql_yesum);
        $objyesum = mysql_fetch_assoc($rs_yesum);
        $allp = $objyesum['allproj'];
        //------------------- END ALL
        $sql_small = 'SELECT COUNT(ProLavel) AS lvs FROM tbl_proj WHERE ProLavel = 1 ';
        if ($_POST['year'] == Date("Y")) {
          $sql_small.= ' AND Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_small.= ' AND Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_small = mysql_query($sql_small);
        $objsmall = mysql_fetch_array($rs_small);
        $all_small = $objsmall['lvs'];
        //------------------- END SMALL
        $sql_middle = 'SELECT COUNT(ProLavel) AS lvm FROM tbl_proj WHERE ProLavel = 2 ';
        if ($_POST['year'] == Date("Y")) {
          $sql_middle.= ' AND Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_middle.= ' AND Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_middle = mysql_query($sql_middle);
        $objmiddle = mysql_fetch_assoc($rs_middle);
        $all_middle = $objmiddle['lvm'];
        //------------------- END MIDDLE
        $sql_big = 'SELECT COUNT(ProLavel) AS lvb FROM tbl_proj WHERE ProLavel = 3 ';
        if ($_POST['year'] == Date("Y")) {
          $sql_big.= ' AND Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_big.= ' AND Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_big = mysql_query($sql_big);
        $objbig = mysql_fetch_assoc($rs_big);
        $all_big = $objbig['lvb'];
        //-------------------------- END Big

        //----------------------------------------------
        $sql_yesum2 = 'SELECT COUNT(ProStatus) AS comproj FROM tbl_proj WHERE ProStatus = 5';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum2 = mysql_query($sql_yesum2);
        $objyesum2 = mysql_fetch_assoc($rs_yesum2);
        $compp = $objyesum2['comproj'];
        //----------------------- END ALL
        $sql_small2 = 'SELECT COUNT(ProStatus) AS comproj_small FROM tbl_proj WHERE ProStatus = 5 AND ProLavel = 1   ';
        if ($_POST['year'] == Date("Y")) {
          $sql_small2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_small2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_small2 = mysql_query($sql_small2);
        $objsmall2 = mysql_fetch_assoc($rs_small2);
        $compp_small = $objsmall2['comproj_small'];
        //------------------------ END SMALL
        $sql_middle2 = 'SELECT COUNT(ProStatus) AS comproj_middle FROM tbl_proj WHERE ProStatus = 5 AND ProLavel = 2   ';
        if ($_POST['year'] == Date("Y")) {
          $sql_middle2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_middle2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_middle2 = mysql_query($sql_middle2);
        $objmiddle2 = mysql_fetch_assoc($rs_middle2);
        $compp_middle = $objmiddle2['comproj_middle'];
        //------------------------ END MIDDLE
        $sql_big2 = 'SELECT COUNT(ProStatus) AS comproj_big FROM tbl_proj WHERE ProStatus = 5 AND ProLavel = 3   ';
        if ($_POST['year'] == Date("Y")) {
          $sql_big2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_big2.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_big2 = mysql_query($sql_big2);
        $objbig2 = mysql_fetch_assoc($rs_big2);
        $compp_big = $objbig2['comproj_big'];
        //------------------------- END BIG

        //----------------------------------------------
         $sql_yesum3 = 'SELECT COUNT(ProStatus) AS opproj FROM tbl_proj WHERE ProStatus = 1';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum3.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum3.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum3 = mysql_query($sql_yesum3);
        $objyesum3 = mysql_fetch_assoc($rs_yesum3);
        $opp = $objyesum3['opproj'];
        //------------------------- END ALL
        $sql_yesum3_small = 'SELECT COUNT(ProStatus) AS opproj_small FROM tbl_proj WHERE ProStatus = 1 and ProLavel = 1';
       if ($_POST['year'] == Date("Y")) {
         $sql_yesum3_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
       }else{
         $sql_yesum3_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
       }
       $rs_yesum3_small = mysql_query($sql_yesum3_small);
       $objyesum3_small = mysql_fetch_assoc($rs_yesum3_small);
       $opp_small = $objyesum3_small['opproj_small'];
       //------------------------- END SMALL
       $sql_yesum3_middle = 'SELECT COUNT(ProStatus) AS opproj_middle FROM tbl_proj WHERE ProStatus = 1 and ProLavel = 2';
      if ($_POST['year'] == Date("Y")) {
        $sql_yesum3_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
      }else{
        $sql_yesum3_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
      }
      $rs_yesum3_middle = mysql_query($sql_yesum3_middle);
      $objyesum3_middle = mysql_fetch_assoc($rs_yesum3_middle);
      $opp_middle = $objyesum3_middle['opproj_middle'];
      //------------------------- END MIDDLE
      $sql_yesum3_big = 'SELECT COUNT(ProStatus) AS opproj_big FROM tbl_proj WHERE ProStatus = 1 and ProLavel = 3';
     if ($_POST['year'] == Date("Y")) {
       $sql_yesum3_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
     }else{
       $sql_yesum3_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
     }
     $rs_yesum3_big = mysql_query($sql_yesum3_big);
     $objyesum3_big = mysql_fetch_assoc($rs_yesum3_big);
     $opp_big = $objyesum3_big['opproj_big'];
     //------------------------- END BIG

        //----------------------------------------------
        $sql_yesum4 = 'SELECT COUNT(ProStatus) AS ohproj FROM tbl_proj WHERE ProStatus = 2';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum4.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum4.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum4 = mysql_query($sql_yesum4);
        $objyesum4 = mysql_fetch_assoc($rs_yesum4);
        $ohp = $objyesum4['ohproj'];
        //------------------- END ALL
        $sql_yesum4_small = 'SELECT COUNT(ProStatus) AS ohproj_small FROM tbl_proj WHERE ProStatus = 2 and ProLavel = 1';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum4_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum4_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum4_small = mysql_query($sql_yesum4_small);
        $objyesum4_small = mysql_fetch_assoc($rs_yesum4_small);
        $ohp_small = $objyesum4_small['ohproj_small'];
        //------------------- END SMALL
        $sql_yesum4_middle = 'SELECT COUNT(ProStatus) AS ohproj_middle FROM tbl_proj WHERE ProStatus = 2 and ProLavel = 2';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum4_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum4_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum4_middle = mysql_query($sql_yesum4_middle);
        $objyesum4_middle = mysql_fetch_assoc($rs_yesum4_middle);
        $ohp_middle = $objyesum4_middle['ohproj_middle'];
        //------------------- END MIDDLE
        $sql_yesum4_big = 'SELECT COUNT(ProStatus) AS ohproju_big FROM tbl_proj WHERE ProStatus = 2 and ProLavel = 3';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum4_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum4_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum4_big = mysql_query($sql_yesum4_big);
        $objyesum4_big = mysql_fetch_assoc($rs_yesum4_big);
        $ohp_big = $objyesum4_big['ohproju_big'];
        //------------------- END BIG

/*
        //----------------------------------------------
        $sql_yesum5 = 'SELECT COUNT(ProStatus) AS clproj FROM tbl_proj WHERE ProStatus = 3';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum5.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum5.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum5 = mysql_query($sql_yesum5);
        $objyesum5 = mysql_fetch_assoc($rs_yesum5);
        $clop = $objyesum5['clproj'];
        //----------------------- END ALL
        $sql_yesum5_small = 'SELECT COUNT(ProStatus) AS clproj_small FROM tbl_proj WHERE ProStatus = 3 and ProLavel = 1';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum5_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum5_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum5_small = mysql_query($sql_yesum5_small);
        $objyesum5_small = mysql_fetch_assoc($rs_yesum5_small);
        $clop_small = $objyesum5_small['clproj_small'];
        //----------------------- END SMALL
        $sql_yesum5_middle = 'SELECT COUNT(ProStatus) AS clproj_middle FROM tbl_proj WHERE ProStatus = 3 and ProLavel = 2';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum5_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum5_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum5_middle = mysql_query($sql_yesum5_middle);
        $objyesum5_middle = mysql_fetch_assoc($rs_yesum5_middle);
        $clop_middle = $objyesum5_middle['clproj_middle'];
        //----------------------- END MIDDLE
        $sql_yesum5_big = 'SELECT COUNT(ProStatus) AS clproj_big FROM tbl_proj WHERE ProStatus = 3 and ProLavel = 3';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum5_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum5_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum5_big = mysql_query($sql_yesum5_big);
        $objyesum5_big = mysql_fetch_assoc($rs_yesum5_big);
        $clop_big = $objyesum5_big['clproj_big'];
        //----------------------- END BIG
*/
        //----------------------------------------------
        $sql_yesum6 = 'SELECT COUNT(ProStatus) AS calproj FROM tbl_proj WHERE ProStatus = 4';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum6.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum6.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum6 = mysql_query($sql_yesum6);
        $objyesum6 = mysql_fetch_assoc($rs_yesum6);
        $clp = $objyesum6['calproj'];
        //---------------------------------------------- END ALL
        $sql_yesum6_small = 'SELECT COUNT(ProStatus) AS calproj_small FROM tbl_proj WHERE ProStatus = 4 and ProLavel = 1';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum6_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum6_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum6_small = mysql_query($sql_yesum6_small);
        $objyesum6_small = mysql_fetch_assoc($rs_yesum6_small);
        $clp_small = $objyesum6_small['calproj_small'];
        //---------------------------------------------- END SMALL
        $sql_yesum6_middle = 'SELECT COUNT(ProStatus) AS calproj_middle FROM tbl_proj WHERE ProStatus = 4 and ProLavel = 2';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum6_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum6_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum6_middle = mysql_query($sql_yesum6_middle);
        $objyesum6_middle = mysql_fetch_assoc($rs_yesum6_middle);
        $clp_middle = $objyesum6_middle['calproj_middle'];
        //---------------------------------------------- END MIDDLE
        $sql_yesum6_big = 'SELECT COUNT(ProStatus) AS calproj_big FROM tbl_proj WHERE ProStatus = 4 and ProLavel = 3';
        if ($_POST['year'] == Date("Y")) {
          $sql_yesum6_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }else{
          $sql_yesum6_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
        }
        $rs_yesum6_big = mysql_query($sql_yesum6_big);
        $objyesum6_big = mysql_fetch_assoc($rs_yesum6_big);
        $clp_big = $objyesum6_big['calproj_big'];
        //---------------------------------------------- END BIG
      ?>
      <tbody>
        <tr>
          <th></th>
          <td style="text-align: center;">โปรเจค</td>
          <td style="text-align: center;">S</td>
          <td style="text-align: center;">M</td>
          <td style="text-align: center;">L</td>
        </tr>
         <tr>
          <th>โปรเจคทั้งหมด</th>
          <td style="text-align: center;"><?php echo $allp;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php echo $all_small ?></c>
          </td>
          <td style="text-align: center;">
            <c style="color:#008500;"><?php echo $all_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php echo $all_big ?></c>
        </td>
        </tr>
        <tr>
          <th>Complete</th>
          <td style="text-align: center;"><?php echo $compp;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php echo $compp_small ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#008500;"><?php echo $compp_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php echo $compp_big ?></c>
          </td>
         </tr>
        <tr>
          <th>Open</th>
          <td style="text-align: center;"><?php echo $opp;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php echo $opp_small ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#008500;"><?php echo $opp_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php echo $opp_big ?></c>
          </td>
        </tr>
        <tr>
          <th>On Hold</th>
          <td style="text-align: center;"><?php echo $ohp;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php echo $ohp_small ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#008500;"><?php echo $ohp_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php echo $ohp_big ?></c>
          </td>
        </tr>
        <!--<tr>
          <th>Closed</th>
          <td style="text-align: center;"><?php #echo $clop;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php #echo $clop_small ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#008500;"><?php #echo $clop_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php #echo $clop_big ?></c>
          </td>
        </tr>-->
        <tr>
          <th>Cancelled</th>
          <td style="text-align: center;"><?php echo $clp;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php echo $clp_small ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#008500;"><?php echo $clp_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php echo $clp_big ?></c>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-9">
    <div id="echartpie" style="height:350px;"></div>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
    <table id="tablesumall" class="display table table-striped table-bordered">
        <thead>
          <tr>
            <th style="text-align: center; width:20%">พงศ์พิชาญ นิรมิตวสุ (ง้วน)</th>
            <th style="text-align: center;">ม.ค.</th>
            <th style="text-align: center;">ก.พ.</th>
            <th style="text-align: center;">มี.ค.</th>
            <th style="text-align: center;">เม.ย.</th>
            <th style="text-align: center;">พ.ค.</th>
            <th style="text-align: center;">มิ.ย.</th>
            <th style="text-align: center;">ก.ค.</th>
            <th style="text-align: center;">ส.ค.</th>
            <th style="text-align: center;">ก.ย.</th>
            <th style="text-align: center;">ต.ค.</th>
            <th style="text-align: center;">พ.ย.</th>
            <th style="text-align: center;">ธ.ค.</th>
          </tr>
            <!--<tr>
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ม.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ก.พ. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- มี.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- เม.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- พ.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- มิ.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ก.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ส.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ก.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ต.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- พ.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ธ.ค. --
            </tr>-->
        </thead>
        <?php $sql_userS = 'SELECT * FROM `tbl_statustype` ORDER BY `tbl_statustype`.`st_id` ASC';
                $objuserS = mysql_query($sql_userS);?>
        <tbody>
        <?php while ($row = mysql_fetch_array($objuserS)) {
                $statuscode = $row['st_code'];
                $statustype = $row['st_name'];
         ?>
            <tr>

              <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;"><?php echo $statustype;?></td>
              <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;"><?php echo $statustype;?></td>
              <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;"><?php echo $statustype;?></td>
              <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;"><?php echo $statustype;?></td>
              <?php } ?>
              <!-- สถานะ -->

              <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode == 1) {
                  $sql_jan = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }
                $rs_jan = mysql_query($sql_jan);
                $obj_jan = mysql_fetch_assoc($rs_jan);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode == 1) {
                  $sql_jan = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }
                $rs_jan = mysql_query($sql_jan);
                $obj_jan = mysql_fetch_assoc($rs_jan);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode == 1) {
                  $sql_jan = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }

                $rs_jan = mysql_query($sql_jan);
                $obj_jan = mysql_fetch_assoc($rs_jan);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode == 1) {
                  $sql_jan = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }

                $rs_jan = mysql_query($sql_jan);
                $obj_jan = mysql_fetch_assoc($rs_jan);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php } ?>
            <!-- =================== JAN =================== -->


            <?php if ($statuscode==1) { ?>
              <td style="background-color:#00bfff; color:#000000;">
                <?php
                if ($statuscode == 1) {
                  $sql_feb = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb = mysql_query($sql_feb);
                $obj_feb = mysql_fetch_assoc($rs_feb);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php }elseif ($statuscode==5) { ?>
              <td style="background-color:#00ff80; color:#000000;">
                <?php
                if ($statuscode == 1) {
                  $sql_feb = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb = mysql_query($sql_feb);
                $obj_feb = mysql_fetch_assoc($rs_feb);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php }elseif ($statuscode==2) { ?>
              <td style="background-color:#808080; color:#000000;">
                <?php
                if ($statuscode == 1) {
                  $sql_feb = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb = mysql_query($sql_feb);
                $obj_feb = mysql_fetch_assoc($rs_feb);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php }else { ?>
              <td style="background-color:#ff8080; color:#000000;">
                <?php
                if ($statuscode == 1) {
                  $sql_feb = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb = mysql_query($sql_feb);
                $obj_feb = mysql_fetch_assoc($rs_feb);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php } ?>
                <!-- =================== FEB =================== -->


                <?php if ($statuscode==1) { ?>
                  <td style="background-color:#00bfff; color:#000000;">
                    <?php
                    if ($statuscode == 1) {
                      $sql_mar = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }else {
                      $sql_mar = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }
                        $rs_mar = mysql_query($sql_mar);
                        $obj_mar = mysql_fetch_assoc($rs_mar);
                        //---------------------------- END MAR ?>
                        <?php if ($obj_mar['Mar'] == 0) { ?>
                        <c></c>
                        <?php }else { ?>
                        <c style="text-align: center;"><?php echo $obj_mar['Mar'] ?></c>
                        <?php } ?>
		              </td>
              <?php }elseif ($statuscode==5) { ?>
                  <td style="background-color:#00ff80; color:#000000;">
                    <?php
                    if ($statuscode == 1) {
                      $sql_mar = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }else {
                      $sql_mar = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }
                        $rs_mar = mysql_query($sql_mar);
                        $obj_mar = mysql_fetch_assoc($rs_mar);
                        //---------------------------- END MAR ?>
                        <?php if ($obj_mar['Mar'] == 0) { ?>
                        <c></c>
                        <?php }else { ?>
                        <c style="text-align: center;"><?php echo $obj_mar['Mar'] ?></c>
                        <?php } ?>
		              </td>
              <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_mar = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }else {
                    $sql_mar = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }
                      $rs_mar = mysql_query($sql_mar);
                      $obj_mar = mysql_fetch_assoc($rs_mar);
                      //---------------------------- END MAR ?>
                      <?php if ($obj_mar['Mar'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_mar['Mar'] ?></c>
                      <?php } ?>
		            </td>
              <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_mar = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }else {
                    $sql_mar = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }
                      $rs_mar = mysql_query($sql_mar);
                      $obj_mar = mysql_fetch_assoc($rs_mar);
                      //---------------------------- END MAR ?>
                      <?php if ($obj_mar['Mar'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_mar['Mar'] ?></c>
                      <?php } ?>
            		</td>
              <?php } ?>
                <!-- =================== MAR =================== -->

                <?php if ($statuscode==1) { ?>
                    <td style="background-color:#00bfff; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_apr = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }else {
                        $sql_apr = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }
                      $rs_apr = mysql_query($sql_apr);
                      $obj_apr = mysql_fetch_assoc($rs_apr);
                      //-------------------------------- END APR
                      ?>
                      <?php if ($obj_apr['Apr'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_apr['Apr'] ?></c>
                      <?php } ?>
                		</td>
                <?php }elseif ($statuscode==5) { ?>
                      <td style="background-color:#00ff80; color:#000000;">

                        <?php
                        if ($statuscode == 1) {
                          $sql_apr = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                          if ($_POST['year'] == Date("Y")) {
                            $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }else{
                            $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }
                        }else {
                          $sql_apr = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                          if ($_POST['year'] == Date("Y")) {
                            $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }else{
                            $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }
                        }
                        $rs_apr = mysql_query($sql_apr);
                        $obj_apr = mysql_fetch_assoc($rs_apr);
                        //-------------------------------- END APR
                        ?>
                        <?php if ($obj_apr['Apr'] == 0) { ?>
                        <c></c>
                        <?php }else { ?>
                        <c style="text-align: center;"><?php echo $obj_apr['Apr'] ?></c>
                        <?php } ?>
                		</td>
                <?php }elseif ($statuscode==2) { ?>
                    <td style="background-color:#808080; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_apr = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }else {
                        $sql_apr = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }
                      $rs_apr = mysql_query($sql_apr);
                      $obj_apr = mysql_fetch_assoc($rs_apr);
                      //-------------------------------- END APR
                      ?>
                      <?php if ($obj_apr['Apr'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_apr['Apr'] ?></c>
                      <?php } ?>
                		</td>
                <?php }else { ?>
                    <td style="background-color:#ff8080; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_apr = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }else {
                        $sql_apr = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }
                      $rs_apr = mysql_query($sql_apr);
                      $obj_apr = mysql_fetch_assoc($rs_apr);
                      //-------------------------------- END APR
                      ?>
                      <?php if ($obj_apr['Apr'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_apr['Apr'] ?></c>
                      <?php } ?>
                		</td>
                <?php } ?>
                <!-- =================== APR =================== -->

                <?php if ($statuscode==1) { ?>
                  <td style="background-color:#00bfff; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_may = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may = mysql_query($sql_may);
                      $obj_may = mysql_fetch_assoc($rs_may);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php }elseif ($statuscode==5) { ?>
                  <td style="background-color:#00ff80; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_may = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may = mysql_query($sql_may);
                      $obj_may = mysql_fetch_assoc($rs_may);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php }elseif ($statuscode==2) { ?>
                  <td style="background-color:#808080; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_may = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may = mysql_query($sql_may);
                      $obj_may = mysql_fetch_assoc($rs_may);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php }else { ?>
                  <td style="background-color:#ff8080; color:#000000;">

                      <?php
                      if ($statuscode == 1) {
                        $sql_may = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may = mysql_query($sql_may);
                      $obj_may = mysql_fetch_assoc($rs_may);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php } ?>
                <!-- =================== MAY =================== -->

                <?php if ($statuscode==1) { ?>
                  <td style="background-color:#00bfff; color:#000000;">
                    <?php
                    if ($statuscode == 1) {
                      $sql_jun = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun = mysql_query($sql_jun);
                    $obj_jun = mysql_fetch_assoc($rs_jun);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php }elseif ($statuscode==5) { ?>
                  <td style="background-color:#00ff80; color:#000000;">
                    <?php
                    if ($statuscode == 1) {
                      $sql_jun = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun = mysql_query($sql_jun);
                    $obj_jun = mysql_fetch_assoc($rs_jun);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php }elseif ($statuscode==2) { ?>
                  <td style="background-color:#808080; color:#000000;">
                    <?php
                    if ($statuscode == 1) {
                      $sql_jun = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun = mysql_query($sql_jun);
                    $obj_jun = mysql_fetch_assoc($rs_jun);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php }else { ?>
                  <td style="background-color:#ff8080; color:#000000;">
                    <?php
                    if ($statuscode == 1) {
                      $sql_jun = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun = mysql_query($sql_jun);
                    $obj_jun = mysql_fetch_assoc($rs_jun);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php } ?>
                <!-- =================== JUN =================== -->

                <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">

                  <?php
                  if ($statuscode == 1) {
                    $sql_jul = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul = mysql_query($sql_jul);
                  $obj_jul = mysql_fetch_assoc($rs_jul);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul['Jul'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">

                  <?php
                  if ($statuscode == 1) {
                    $sql_jul = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul = mysql_query($sql_jul);
                  $obj_jul = mysql_fetch_assoc($rs_jul);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul['Jul'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">

                  <?php
                  if ($statuscode == 1) {
                    $sql_jul = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul = mysql_query($sql_jul);
                  $obj_jul = mysql_fetch_assoc($rs_jul);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul['Jul'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">

                  <?php
                  if ($statuscode == 1) {
                    $sql_jul = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul = mysql_query($sql_jul);
                  $obj_jul = mysql_fetch_assoc($rs_jul);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul['Jul'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== Jul =================== -->

                <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_aug = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug = mysql_query($sql_aug);
                  $obj_aug = mysql_fetch_assoc($rs_aug);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug['Aug'] ?></c>
                    <?php } ?>
                </td>
                <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_aug = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug = mysql_query($sql_aug);
                  $obj_aug = mysql_fetch_assoc($rs_aug);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug['Aug'] ?></c>
                    <?php } ?>
                </td>
                <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_aug = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug = mysql_query($sql_aug);
                  $obj_aug = mysql_fetch_assoc($rs_aug);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug['Aug'] ?></c>
                    <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_aug = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug = mysql_query($sql_aug);
                  $obj_aug = mysql_fetch_assoc($rs_aug);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug['Aug'] ?></c>
                    <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== AUG =================== -->


                <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_sep = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep = mysql_query($sql_sep);
                  $obj_sep = mysql_fetch_assoc($rs_sep);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep['Sep'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_sep = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep = mysql_query($sql_sep);
                  $obj_sep = mysql_fetch_assoc($rs_sep);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep['Sep'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_sep = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep = mysql_query($sql_sep);
                  $obj_sep = mysql_fetch_assoc($rs_sep);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep['Sep'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_sep = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep = mysql_query($sql_sep);
                  $obj_sep = mysql_fetch_assoc($rs_sep);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep['Sep'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== SEP =================== -->

                <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_oct = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct = mysql_query($sql_oct);
                  $obj_oct = mysql_fetch_assoc($rs_oct);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct['Oct'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_oct = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct = mysql_query($sql_oct);
                  $obj_oct = mysql_fetch_assoc($rs_oct);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct['Oct'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_oct = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct = mysql_query($sql_oct);
                  $obj_oct = mysql_fetch_assoc($rs_oct);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct['Oct'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_oct = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct = mysql_query($sql_oct);
                  $obj_oct = mysql_fetch_assoc($rs_oct);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct['Oct'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== OCT =================== -->

                <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_nov = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov = mysql_query($sql_nov);
                  $obj_nov = mysql_fetch_assoc($rs_nov);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov['NOV'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_nov = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov = mysql_query($sql_nov);
                  $obj_nov = mysql_fetch_assoc($rs_nov);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov['NOV'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_nov = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov = mysql_query($sql_nov);
                  $obj_nov = mysql_fetch_assoc($rs_nov);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov['NOV'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_nov = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' WHERE  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov = mysql_query($sql_nov);
                  $obj_nov = mysql_fetch_assoc($rs_nov);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov['NOV'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== NOV =================== -->

                <?php if ($statuscode==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_dec = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec = mysql_query($sql_dec);
                  $obj_dec = mysql_fetch_assoc($rs_dec);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec['Dec1'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_dec = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec = mysql_query($sql_dec);
                  $obj_dec = mysql_fetch_assoc($rs_dec);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec['Dec1'] ?></c>
                  <?php } ?>
                </td>
                <?php }elseif ($statuscode==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_dec = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec = mysql_query($sql_dec);
                  $obj_dec = mysql_fetch_assoc($rs_dec);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec['Dec1'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode == 1) {
                    $sql_dec = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' WHERE  `ProCreateUser` = "15" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec.= ' and  `ProCreateUser` = "15" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec = mysql_query($sql_dec);
                  $obj_dec = mysql_fetch_assoc($rs_dec);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec['Dec1'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== DEC =================== -->





            </tr>
                <?php }?>
            </tbody>
    </table>
  </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
    <table id="tablesumall" class="display table table-striped table-bordered">
        <thead>
          <tr>
            <th style="text-align: center; width:20%">บริษัท ภัทร โปรเกรส</th>
            <th style="text-align: center;">ม.ค.</th>
            <th style="text-align: center;">ก.พ.</th>
            <th style="text-align: center;">มี.ค.</th>
            <th style="text-align: center;">เม.ย.</th>
            <th style="text-align: center;">พ.ค.</th>
            <th style="text-align: center;">มิ.ย.</th>
            <th style="text-align: center;">ก.ค.</th>
            <th style="text-align: center;">ส.ค.</th>
            <th style="text-align: center;">ก.ย.</th>
            <th style="text-align: center;">ต.ค.</th>
            <th style="text-align: center;">พ.ย.</th>
            <th style="text-align: center;">ธ.ค.</th>
          </tr>
            <!--<tr>
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ม.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ก.พ. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- มี.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- เม.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- พ.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- มิ.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ก.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ส.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ก.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ต.ค. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- พ.ย. --
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- ธ.ค. --
            </tr>-->
        </thead>
        <?php $sql_userS_bhatara = 'SELECT * FROM `tbl_statustype` ORDER BY `tbl_statustype`.`st_id` ASC';
                $objuserS_bhatara = mysql_query($sql_userS_bhatara);?>
        <tbody>
        <?php while ($row_bhatara = mysql_fetch_array($objuserS_bhatara)) {
                $statuscode_bhatara = $row_bhatara['st_code'];
                $statustype_bhatara = $row_bhatara['st_name'];
         ?>
            <tr>

              <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;"><?php echo $statustype_bhatara;?></td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;"><?php echo $statustype_bhatara;?></td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;"><?php echo $statustype_bhatara;?></td>
              <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;"><?php echo $statustype_bhatara;?></td>
              <?php } ?>
              <!-- สถานะ -->

              <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode_bhatara == 1) {
                  $sql_jan_bhatara = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan_bhatara = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }
                $rs_jan_bhatara = mysql_query($sql_jan_bhatara);
                $obj_jan_bhatara = mysql_fetch_assoc($rs_jan_bhatara);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan_bhatara['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan_bhatara['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode_bhatara == 1) {
                  $sql_jan_bhatara = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan_bhatara = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }
                $rs_jan_bhatara = mysql_query($sql_jan_bhatara);
                $obj_jan_bhatara = mysql_fetch_assoc($rs_jan_bhatara);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan_bhatara['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan_bhatara['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode_bhatara == 1) {
                  $sql_jan_bhatara = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan_bhatara = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }

                $rs_jan_bhatara = mysql_query($sql_jan_bhatara);
                $obj_jan_bhatara = mysql_fetch_assoc($rs_jan_bhatara);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan_bhatara['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan_bhatara['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                //----------------------------------------------
                if ($statuscode_bhatara == 1) {
                  $sql_jan_bhatara = 'SELECT COUNT(ProCreateDate) AS Jan FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }else {
                  $sql_jan_bhatara = 'SELECT COUNT(ProStatus) AS Jan FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }else{
                    $sql_jan_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-1-31" ';
                  }
                }

                $rs_jan_bhatara = mysql_query($sql_jan_bhatara);
                $obj_jan_bhatara = mysql_fetch_assoc($rs_jan_bhatara);
                //---------------------------- END JAN
                ?>
                <?php if ($obj_jan_bhatara['Jan'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_jan_bhatara['Jan'] ?></c>
              <?php } ?>
                </td>
              <?php } ?>
            <!-- =================== JAN =================== -->


            <?php if ($statuscode_bhatara==1) { ?>
              <td style="background-color:#00bfff; color:#000000;">
                <?php
                if ($statuscode_bhatara == 1) {
                  $sql_feb_bhatara = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb_bhatara = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb_bhatara = mysql_query($sql_feb_bhatara);
                $obj_feb_bhatara = mysql_fetch_assoc($rs_feb_bhatara);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb_bhatara['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb_bhatara['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php }elseif ($statuscode_bhatara==5) { ?>
              <td style="background-color:#00ff80; color:#000000;">
                <?php
                if ($statuscode_bhatara == 1) {
                  $sql_feb_bhatara = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb_bhatara = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb_bhatara = mysql_query($sql_feb_bhatara);
                $obj_feb_bhatara = mysql_fetch_assoc($rs_feb_bhatara);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb_bhatara['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb_bhatara['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php }elseif ($statuscode_bhatara==2) { ?>
              <td style="background-color:#808080; color:#000000;">
                <?php
                if ($statuscode_bhatara == 1) {
                  $sql_feb_bhatara = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb_bhatara = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb_bhatara = mysql_query($sql_feb_bhatara);
                $obj_feb_bhatara = mysql_fetch_assoc($rs_feb_bhatara);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb_bhatara['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb_bhatara['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php }else { ?>
              <td style="background-color:#ff8080; color:#000000;">
                <?php
                if ($statuscode_bhatara == 1) {
                  $sql_feb_bhatara = 'SELECT COUNT(ProCreateDate) AS Feb FROM tbl_proj';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }else {
                  $sql_feb_bhatara = 'SELECT COUNT(ProStatus) AS Feb FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }else{
                    $sql_feb_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-2-1" and "'.$_POST['year'].'-2-29" ';
                  }
                }
                $rs_feb_bhatara = mysql_query($sql_feb_bhatara);
                $obj_feb_bhatara = mysql_fetch_assoc($rs_feb_bhatara);
                //---------------------------- END FEB ?>
                <?php if ($obj_feb_bhatara['Feb'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="text-align: center;"><?php echo $obj_feb_bhatara['Feb'] ?></c>
              <?php } ?>
              </td>
            <?php } ?>
                <!-- =================== FEB =================== -->


                <?php if ($statuscode_bhatara==1) { ?>
                  <td style="background-color:#00bfff; color:#000000;">
                    <?php
                    if ($statuscode_bhatara == 1) {
                      $sql_mar_bhatara = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }else {
                      $sql_mar_bhatara = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }
                        $rs_mar_bhatara = mysql_query($sql_mar_bhatara);
                        $obj_mar_bhatara = mysql_fetch_assoc($rs_mar_bhatara);
                        //---------------------------- END MAR ?>
                        <?php if ($obj_mar_bhatara['Mar'] == 0) { ?>
                        <c></c>
                        <?php }else { ?>
                        <c style="text-align: center;"><?php echo $obj_mar_bhatara['Mar'] ?></c>
                        <?php } ?>
		              </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                  <td style="background-color:#00ff80; color:#000000;">
                    <?php
                    if ($statuscode_bhatara == 1) {
                      $sql_mar_bhatara = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }else {
                      $sql_mar_bhatara = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }else{
                        $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                      }
                    }
                        $rs_mar_bhatara = mysql_query($sql_mar_bhatara);
                        $obj_mar_bhatara = mysql_fetch_assoc($rs_mar_bhatara);
                        //---------------------------- END MAR ?>
                        <?php if ($obj_mar_bhatara['Mar'] == 0) { ?>
                        <c></c>
                        <?php }else { ?>
                        <c style="text-align: center;"><?php echo $obj_mar_bhatara['Mar'] ?></c>
                        <?php } ?>
		              </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_mar_bhatara = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }else {
                    $sql_mar_bhatara = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }
                      $rs_mar_bhatara = mysql_query($sql_mar_bhatara);
                      $obj_mar_bhatara = mysql_fetch_assoc($rs_mar_bhatara);
                      //---------------------------- END MAR ?>
                      <?php if ($obj_mar_bhatara['Mar'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_mar_bhatara['Mar'] ?></c>
                      <?php } ?>
		            </td>
              <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_mar = 'SELECT COUNT(ProCreateDate) AS Mar FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }else {
                    $sql_mar_bhatara = 'SELECT COUNT(ProStatus) AS Mar FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }else{
                      $sql_mar_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-3-1" and "'.$_POST['year'].'-3-31" ';
                    }
                  }
                      $rs_mar_bhatara = mysql_query($sql_mar_bhatara);
                      $obj_mar_bhatara = mysql_fetch_assoc($rs_mar_bhatara);
                      //---------------------------- END MAR ?>
                      <?php if ($obj_mar_bhatara['Mar'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_mar_bhatara['Mar'] ?></c>
                      <?php } ?>
            		</td>
              <?php } ?>
                <!-- =================== MAR =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                    <td style="background-color:#00bfff; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_apr_bhatara = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }else {
                        $sql_apr_bhatara = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }
                      $rs_apr_bhatara = mysql_query($sql_apr_bhatara);
                      $obj_apr_bhatara = mysql_fetch_assoc($rs_apr_bhatara);
                      //-------------------------------- END APR
                      ?>
                      <?php if ($obj_apr_bhatara['Apr'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_apr_bhatara['Apr'] ?></c>
                      <?php } ?>
                		</td>
                <?php }elseif ($statuscode_bhatara==5) { ?>
                      <td style="background-color:#00ff80; color:#000000;">

                        <?php
                        if ($statuscode_bhatara == 1) {
                          $sql_apr_bhatara = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                          if ($_POST['year'] == Date("Y")) {
                            $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }else{
                            $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }
                        }else {
                          $sql_apr_bhatara = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                          if ($_POST['year'] == Date("Y")) {
                            $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }else{
                            $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                          }
                        }
                        $rs_apr_bhatara = mysql_query($sql_apr_bhatara);
                        $obj_apr_bhatara = mysql_fetch_assoc($rs_apr_bhatara);
                        //-------------------------------- END APR
                        ?>
                        <?php if ($obj_apr_bhatara['Apr'] == 0) { ?>
                        <c></c>
                        <?php }else { ?>
                        <c style="text-align: center;"><?php echo $obj_apr_bhatara['Apr'] ?></c>
                        <?php } ?>
                		</td>
                <?php }elseif ($statuscode_bhatara==2) { ?>
                    <td style="background-color:#808080; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_apr_bhatara = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }else {
                        $sql_apr_bhatara = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }
                      $rs_apr_bhatara = mysql_query($sql_apr_bhatara);
                      $obj_apr_bhatara = mysql_fetch_assoc($rs_apr_bhatara);
                      //-------------------------------- END APR
                      ?>
                      <?php if ($obj_apr_bhatara['Apr'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_apr_bhatara['Apr'] ?></c>
                      <?php } ?>
                		</td>
                <?php }else { ?>
                    <td style="background-color:#ff8080; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_apr_bhatara = 'SELECT COUNT(ProCreateDate) AS Apr FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }else {
                        $sql_apr_bhatara = 'SELECT COUNT(ProStatus) AS Apr FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }else{
                          $sql_apr_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-4-1" and "'.$_POST['year'].'-4-30" ';
                        }
                      }
                      $rs_apr_bhatara = mysql_query($sql_apr_bhatara);
                      $obj_apr_bhatara = mysql_fetch_assoc($rs_apr_bhatara);
                      //-------------------------------- END APR
                      ?>
                      <?php if ($obj_apr_bhatara['Apr'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_apr_bhatara['Apr'] ?></c>
                      <?php } ?>
                		</td>
                <?php } ?>
                <!-- =================== APR =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                  <td style="background-color:#00bfff; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_may_bhatara = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may_bhatara = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may_bhatara = mysql_query($sql_may_bhatara);
                      $obj_may_bhatara = mysql_fetch_assoc($rs_may_bhatara);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may_bhatara['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may_bhatara['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php }elseif ($statuscode_bhatara==5) { ?>
                  <td style="background-color:#00ff80; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_may_bhatara = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may_bhatara = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may_bhatara = mysql_query($sql_may_bhatara);
                      $obj_may_bhatara = mysql_fetch_assoc($rs_may_bhatara);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may_bhatara['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may_bhatara['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php }elseif ($statuscode_bhatara==2) { ?>
                  <td style="background-color:#808080; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_may_bhatara = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may_bhatara = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may_bhatara = mysql_query($sql_may_bhatara);
                      $obj_may_bhatara = mysql_fetch_assoc($rs_may_bhatara);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may_bhatara['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may_bhatara['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php }else { ?>
                  <td style="background-color:#ff8080; color:#000000;">

                      <?php
                      if ($statuscode_bhatara == 1) {
                        $sql_may_bhatara = 'SELECT COUNT(ProCreateDate) AS May FROM tbl_proj';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }else {
                        $sql_may_bhatara = 'SELECT COUNT(ProStatus) AS May FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                        if ($_POST['year'] == Date("Y")) {
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }else{
                          $sql_may_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-5-1" and "'.$_POST['year'].'-5-31" ';
                        }
                      }
                      $rs_may_bhatara = mysql_query($sql_may_bhatara);
                      $obj_may_bhatara = mysql_fetch_assoc($rs_may_bhatara);
                      //-------------------------------- END MAY ?>
                      <?php if ($obj_may_bhatara['May'] == 0) { ?>
                      <c></c>
                      <?php }else { ?>
                      <c style="text-align: center;"><?php echo $obj_may_bhatara['May'] ?></c>
                      <?php } ?>
                  </td>
                <?php } ?>
                <!-- =================== MAY =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                  <td style="background-color:#00bfff; color:#000000;">
                    <?php
                    if ($statuscode_bhatara == 1) {
                      $sql_jun_bhatara = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun_bhatara = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun_bhatara = mysql_query($sql_jun_bhatara);
                    $obj_jun_bhatara = mysql_fetch_assoc($rs_jun_bhatara);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun_bhatara['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun_bhatara['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php }elseif ($statuscode_bhatara==5) { ?>
                  <td style="background-color:#00ff80; color:#000000;">
                    <?php
                    if ($statuscode_bhatara == 1) {
                      $sql_jun_bhatara = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun_bhatara = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun_bhatara = mysql_query($sql_jun_bhatara);
                    $obj_jun_bhatara = mysql_fetch_assoc($rs_jun_bhatara);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun_bhatara['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun_bhatara['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php }elseif ($statuscode_bhatara==2) { ?>
                  <td style="background-color:#808080; color:#000000;">
                    <?php
                    if ($statuscode_bhatara == 1) {
                      $sql_jun_bhatara = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun_bhatara = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun_bhatara = mysql_query($sql_jun_bhatara);
                    $obj_jun_bhatara = mysql_fetch_assoc($rs_jun_bhatara);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun_bhatara['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun_bhatara['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php }else { ?>
                  <td style="background-color:#ff8080; color:#000000;">
                    <?php
                    if ($statuscode_bhatara == 1) {
                      $sql_jun_bhatara = 'SELECT COUNT(ProCreateDate) AS Jun FROM tbl_proj';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }else {
                      $sql_jun_bhatara = 'SELECT COUNT(ProStatus) AS Jun FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                      if ($_POST['year'] == Date("Y")) {
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }else{
                        $sql_jun_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-6-1" and "'.$_POST['year'].'-6-30" ';
                      }
                    }
                    $rs_jun_bhatara = mysql_query($sql_jun_bhatara);
                    $obj_jun_bhatara = mysql_fetch_assoc($rs_jun_bhatara);
                    //-------------------------------- END JUN ?>
                    <?php if ($obj_jun_bhatara['Jun'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_jun_bhatara['Jun'] ?></c>
                    <?php } ?>
                  </td>
                <?php } ?>
                <!-- =================== JUN =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">

                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_jul_bhatara = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul_bhatara = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul_bhatara = mysql_query($sql_jul_bhatara);
                  $obj_jul_bhatara = mysql_fetch_assoc($rs_jul_bhatara);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul_bhatara['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul_bhatara['Jul'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">

                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_jul_bhatara = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul_bhatara = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul_bhatara = mysql_query($sql_jul_bhatara);
                  $obj_jul_bhatara = mysql_fetch_assoc($rs_jul_bhatara);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul_bhatara['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul_bhatara['Jul'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">

                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_jul_bhatara = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul_bhatara = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul_bhatara = mysql_query($sql_jul_bhatara);
                  $obj_jul_bhatara = mysql_fetch_assoc($rs_jul_bhatara);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul_bhatara['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul_bhatara['Jul'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">

                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_jul_bhatara = 'SELECT COUNT(ProCreateDate) AS Jul FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }else {
                    $sql_jul_bhatara = 'SELECT COUNT(ProStatus) AS Jul FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }else{
                      $sql_jul_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-7-1" and "'.$_POST['year'].'-7-31" ';
                    }
                  }
                  $rs_jul_bhatara = mysql_query($sql_jul_bhatara);
                  $obj_jul_bhatara = mysql_fetch_assoc($rs_jul_bhatara);
                  //----------------------- END Jul
                  ?>
                  <?php if ($obj_jul_bhatara['Jul'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_jul_bhatara['Jul'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== Jul =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_aug_bhatara = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug_bhatara = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug_bhatara = mysql_query($sql_aug_bhatara);
                  $obj_aug_bhatara = mysql_fetch_assoc($rs_aug_bhatara);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug_bhatara['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug_bhatara['Aug'] ?></c>
                    <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_aug_bhatara = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug_bhatara = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug_bhatara = mysql_query($sql_aug_bhatara);
                  $obj_aug_bhatara = mysql_fetch_assoc($rs_aug_bhatara);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug_bhatara['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug_bhatara['Aug'] ?></c>
                    <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_aug_bhatara = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug_bhatara = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug_bhatara = mysql_query($sql_aug_bhatara);
                  $obj_aug_bhatara = mysql_fetch_assoc($rs_aug_bhatara);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug_bhatara['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug_bhatara['Aug'] ?></c>
                    <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_aug_bhatara = 'SELECT COUNT(ProCreateDate) AS Aug FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }else {
                    $sql_aug_bhatara = 'SELECT COUNT(ProStatus) AS Aug FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }else{
                      $sql_aug_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-8-1" and "'.$_POST['year'].'-8-31" ';
                    }
                  }
                  $rs_aug_bhatara = mysql_query($sql_aug_bhatara);
                  $obj_aug_bhatara = mysql_fetch_assoc($rs_aug_bhatara);
                  //----------------------- END AUG ?>
                    <?php if ($obj_aug_bhatara['Aug'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="text-align: center;"><?php echo $obj_aug_bhatara['Aug'] ?></c>
                    <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== AUG =================== -->


                <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_sep_bhatara = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep_bhatara = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep_bhatara = mysql_query($sql_sep_bhatara);
                  $obj_sep_bhatara = mysql_fetch_assoc($rs_sep_bhatara);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep_bhatara['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep_bhatara['Sep'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_sep_bhatara = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep_bhatara = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep_bhatara = mysql_query($sql_sep_bhatara);
                  $obj_sep_bhatara = mysql_fetch_assoc($rs_sep_bhatara);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep_bhatara['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep_bhatara['Sep'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_sep_bhatara = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep_bhatara = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep_bhatara = mysql_query($sql_sep_bhatara);
                  $obj_sep_bhatara = mysql_fetch_assoc($rs_sep_bhatara);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep_bhatara['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep_bhatara['Sep'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_sep_bhatara = 'SELECT COUNT(ProCreateDate) AS Sep FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }else {
                    $sql_sep_bhatara = 'SELECT COUNT(ProStatus) AS Sep FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }else{
                      $sql_sep_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-9-1" and "'.$_POST['year'].'-9-30" ';
                    }
                  }
                  $rs_sep_bhatara = mysql_query($sql_sep_bhatara);
                  $obj_sep_bhatara = mysql_fetch_assoc($rs_sep_bhatara);
                  //----------------------- END SEP ?>
                  <?php if ($obj_sep_bhatara['Sep'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_sep_bhatara['Sep'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== SEP =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_oct_bhatara = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct_bhatara = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct_bhatara = mysql_query($sql_oct_bhatara);
                  $obj_oct_bhatara = mysql_fetch_assoc($rs_oct_bhatara);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct_bhatara['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct_bhatara['Oct'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_oct_bhatara = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct_bhatara = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct_bhatara = mysql_query($sql_oct_bhatara);
                  $obj_oct_bhatara = mysql_fetch_assoc($rs_oct_bhatara);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct_bhatara['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct_bhatara['Oct'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_oct_bhatara = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct_bhatara = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct_bhatara = mysql_query($sql_oct_bhatara);
                  $obj_oct_bhatara = mysql_fetch_assoc($rs_oct_bhatara);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct_bhatara['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct_bhatara['Oct'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_oct_bhatara = 'SELECT COUNT(ProCreateDate) AS Oct FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }else {
                    $sql_oct_bhatara = 'SELECT COUNT(ProStatus) AS Oct FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }else{
                      $sql_oct_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-10-1" and "'.$_POST['year'].'-10-31" ';
                    }
                  }
                  $rs_oct_bhatara = mysql_query($sql_oct_bhatara);
                  $obj_oct_bhatara = mysql_fetch_assoc($rs_oct_bhatara);
                  //------------------------------- END OCT
                  ?>
                  <?php if ($obj_oct_bhatara['Oct'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_oct_bhatara['Oct'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== OCT =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_nov_bhatara = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov_bhatara = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov_bhatara = mysql_query($sql_nov_bhatara);
                  $obj_nov_bhatara = mysql_fetch_assoc($rs_nov_bhatara);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov_bhatara['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov_bhatara['NOV'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_nov_bhatara = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov_bhatara = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov_bhatara = mysql_query($sql_nov_bhatara);
                  $obj_nov_bhatara = mysql_fetch_assoc($rs_nov_bhatara);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov_bhatara['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov_bhatara['NOV'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_nov_bhatara = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov_bhatara = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov_bhatara = mysql_query($sql_nov_bhatara);
                  $obj_nov_bhatara = mysql_fetch_assoc($rs_nov_bhatara);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov_bhatara['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov_bhatara['NOV'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_nov_bhatara = 'SELECT COUNT(ProCreateDate) AS NOV FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }else {
                    $sql_nov_bhatara = 'SELECT COUNT(ProStatus) AS NOV FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }else{
                      $sql_nov_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-11-1" and "'.$_POST['year'].'-11-30" ';
                    }
                  }
                  $rs_nov_bhatara = mysql_query($sql_nov_bhatara);
                  $obj_nov_bhatara = mysql_fetch_assoc($rs_nov_bhatara);
                  //------------------------------- END NOV ?>
                  <?php if ($obj_nov_bhatara['NOV'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_nov_bhatara['NOV'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== NOV =================== -->

                <?php if ($statuscode_bhatara==1) { ?>
                <td style="background-color:#00bfff; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_dec_bhatara = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec_bhatara = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec_bhatara = mysql_query($sql_dec_bhatara);
                  $obj_dec_bhatara = mysql_fetch_assoc($rs_dec_bhatara);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec_bhatara['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec_bhatara['Dec1'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==5) { ?>
                <td style="background-color:#00ff80; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_dec_bhatara = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec_bhatara = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec_bhatara = mysql_query($sql_dec_bhatara);
                  $obj_dec_bhatara = mysql_fetch_assoc($rs_dec_bhatara);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec_bhatara['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec_bhatara['Dec1'] ?></c>
                  <?php } ?>
                </td>
              <?php }elseif ($statuscode_bhatara==2) { ?>
                <td style="background-color:#808080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_dec_bhatara = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec_bhatara = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec_bhatara = mysql_query($sql_dec_bhatara);
                  $obj_dec_bhatara = mysql_fetch_assoc($rs_dec_bhatara);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec_bhatara['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec_bhatara['Dec1'] ?></c>
                  <?php } ?>
                </td>
                <?php }else { ?>
                <td style="background-color:#ff8080; color:#000000;">
                  <?php
                  if ($statuscode_bhatara == 1) {
                    $sql_dec_bhatara = 'SELECT COUNT(ProCreateDate) AS Dec1 FROM tbl_proj';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' WHERE  `ProCreateUser` = "19" and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }else {
                    $sql_dec_bhatara = 'SELECT COUNT(ProStatus) AS Dec1 FROM tbl_proj WHERE ProStatus = "'.$statuscode_bhatara.'"';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_dec_bhatara.= ' and  `ProCreateUser` = "19" and  Date(ProDateStu) BETWEEN  "'.$_POST['year'].'-12-1" and "'.$_POST['year'].'-12-31" ';
                    }
                  }
                  $rs_dec_bhatara = mysql_query($sql_dec_bhatara);
                  $obj_dec_bhatara = mysql_fetch_assoc($rs_dec_bhatara);
                  //------------------------------- END DEC
                  ?>
                  <?php if ($obj_dec_bhatara['Dec1'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="text-align: center;"><?php echo $obj_dec_bhatara['Dec1'] ?></c>
                  <?php } ?>
                </td>
                <?php } ?>
                <!-- =================== DEC =================== -->





            </tr>
                <?php }mysql_close($c);?>
            </tbody>
    </table>
  </div>
</div>
<script>
    $(function() {
      //$("#tablesumall").DataTable();

        if ($('#echartpie').length ){

			  var echartPie = echarts.init(document.getElementById('echartpie'));

			  echartPie.setOption({
				tooltip: {
				  trigger: 'item',
				  formatter: "{a} <br/>{b} : {c} ({d}%)"
				},
				legend: {
				  x: 'center',
				  y: 'bottom',
				  data: ['Complete', 'Open', 'On Hold'/*, 'Closed'*/, 'Cancelled']
				},
				toolbox: {
				  show: true,
				  feature: {
					magicType: {
					  show: true,
					  type: ['pie', 'funnel'],
					  option: {
						funnel: {
						  x: '25%',
						  width: '50%',
						  funnelAlign: 'left',
						  max: 1548
						}
					  }
					},
					restore: {
					  show: true,
					  title: "Restore"
					},
					saveAsImage: {
					  show: true,
					  title: "Save Image"
					}
				  }
				},
        calculable: true,
        color: [
            '#01DF74', '#0080FF', '#848484',/* '#DF7401',*/
					  '#B40404'
				],
        title: {
					textStyle: {
						color: '#333'
					}
				},
				textStyle: {
					  fontFamily: 'Arial, Verdana, sans-serif'
				},
				series: [{
				  name: 'รายงานสรุป',
				  type: 'pie',
				  radius: '55%',
				  center: ['50%', '48%'],
				  data: [{
					value: <?php echo $compp;?>,
					name: 'Complete'
				  }, {
					value: <?php echo $opp;?>,
					name: 'Open'
				  }, {
					value: <?php echo $ohp;?>,
					name: 'On Hold'
        }, /*{
					value: <?php# echo $clop;?>,
					name: 'Closed'
        }, */{
					value: <?php echo $clp;?>,
					name: 'Cancelled'
				  }]
				}]
			  });

			}


    });
</script>
