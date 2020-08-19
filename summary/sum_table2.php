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
        <tr>
          <th>Closed</th>
          <td style="text-align: center;"><?php echo $clop;?></td>
          <td style="text-align: center;">
            <c style="color:#ff0000;"><?php echo $clop_small ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#008500;"><?php echo $clop_middle ?></c>
          </td>
          <td style="text-align: center;">
          <c style="color:#0000ff;"><?php echo $clop_big ?></c>
          </td>
        </tr>
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
            <th rowspan="2" style="text-align: center;">User</th>
            <th colspan="3" style="text-align: center;">โปรเจคทั้งหมด</th>
            <th colspan="3" style="text-align: center;">Complete</th>
            <th colspan="3" style="text-align: center;">Open</th>
            <th colspan="3" style="text-align: center;">On Hold</th>
            <th colspan="3" style="text-align: center;">Closed</th>
            <th colspan="3" style="text-align: center;">Cancelled</th>
          </tr>
            <tr>
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- 1 -->
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- 2 -->
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- 3 -->
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- 4 -->
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- 5 -->
                <th style="text-align: center;">S</th>
                <th style="text-align: center;">M</th>
                <th style="text-align: center;">L</th><!-- 6 -->
            </tr>
        </thead>
        <?php $sql_userS = 'SELECT * FROM tbl_users WHERE UserID = 15';
                $objuserS = mysql_query($sql_userS);?>
        <tbody>
        <?php while ($row = mysql_fetch_array($objuserS)) {
                $user = $row['UserSname'];
         ?>
            <tr>
                <td><?php echo $user;?></td>
                <td>
                <?php
                //----------------------------------------------
                /*$sql_yesumu = 'SELECT COUNT(ProjID) AS allproju FROM tbl_proj WHERE ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesumu.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesumu.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesumu = mysql_query($sql_yesumu);
                $objyesumu = mysql_fetch_assoc($rs_yesumu);*/
                //echo  $objyesumu['allproju']." (S: , M: , L: ) ";
                //----------------------------------------------
                $sql_yesumu_small = 'SELECT COUNT(ProLavel) AS allproju_small FROM tbl_proj WHERE ProLavel = 1 AND ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesumu_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesumu_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesumu_small = mysql_query($sql_yesumu_small);
                $objyesumu_small = mysql_fetch_assoc($rs_yesumu_small);
                //---------------------------- END SMALL

                ?>
                <!--<b style="color:#000000;"><?php# echo $objyesumu['allproju']; ?> </b>-->
                <?php if ($objyesumu_small['allproju_small'] == 0) { ?>
                <c></c>
              <?php }else { ?>
                <c style="color:#ff0000; text-align: center;"><?php echo $objyesumu_small['allproju_small'] ?></c>
              <?php } ?>
            </td>
            <!-- =================== SMALL =================== -->

                <td>
                  <?php $sql_yesumu_middle = 'SELECT COUNT(ProLavel) AS allproju_middle FROM tbl_proj WHERE ProLavel = 2 AND ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesumu_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                    $sql_yesumu_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesumu_middle = mysql_query($sql_yesumu_middle);
                  $objyesumu_middle = mysql_fetch_assoc($rs_yesumu_middle);
                  //---------------------------- END MIDDLE ?>
                  <?php if ($objyesumu_middle['allproju_middle'] == 0) { ?>
                  <c></c>
                <?php }else { ?>
                  <c style="color:#008500; text-align: center;"><?php echo $objyesumu_middle['allproju_middle'] ?></c>
                <?php } ?>
                </td>
                <!-- =================== MIDDLE =================== -->

                <td> <?php
                    $sql_yesumu_big = 'SELECT COUNT(ProLavel) AS allproju_big FROM tbl_proj WHERE ProLavel = 3 AND ProCreateUser = "'.$row['UserID'].'" ';
                    if ($_POST['year'] == Date("Y")) {
                      $sql_yesumu_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                    }else{
                      $sql_yesumu_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                    }
                    $rs_yesumu_big = mysql_query($sql_yesumu_big);
                    $objyesumu_big = mysql_fetch_assoc($rs_yesumu_big);
                    //---------------------------- END BIG ?>
                    <?php if ($objyesumu_big['allproju_big'] == 0) { ?>
                    <c></c>
                    <?php }else { ?>
                    <c style="color:#0000ff; text-align: center;"><?php echo $objyesumu_big['allproju_big'] ?></c>
                    <?php } ?>
                </td>
                <!-- =================== BIG =================== -->

                <td>
                <?php
                //----------------------------------------------
                /*$sql_yesum2u = 'SELECT COUNT(ProStatus) AS comproju FROM tbl_proj WHERE ProStatus = 5 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum2u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum2u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum2u = mysql_query($sql_yesum2u);
                $objyesum2u = mysql_fetch_assoc($rs_yesum2u);*/
                //echo $objyesum2u['comproju']." (S: , M: , L: ) ";
                //----------------------------------------------
                $sql_yesum2u_small = 'SELECT COUNT(ProStatus) AS comproju_small FROM tbl_proj WHERE ProStatus = 5 and ProLavel = 1 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum2u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum2u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum2u_small = mysql_query($sql_yesum2u_small);
                $objyesum2u_small = mysql_fetch_assoc($rs_yesum2u_small);
                //-------------------------------- END SMALL
                ?>
                <?php if ($objyesum2u_small['comproju_small'] == 0) { ?>
                <c></c>
                <?php }else { ?>
                <c style="color:#ff0000; text-align: center;"><?php echo $objyesum2u_small['comproju_small'] ?></c>
                <?php } ?>
                </td>
                <!-- =================== SMALL =================== -->

                <td>
                  <?php $sql_yesum2u_middle = 'SELECT COUNT(ProStatus) AS comproju_middle FROM tbl_proj WHERE ProStatus = 5 and ProLavel = 2 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesum2u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                    $sql_yesum2u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum2u_middle = mysql_query($sql_yesum2u_middle);
                  $objyesum2u_middle = mysql_fetch_assoc($rs_yesum2u_middle);
                  //-------------------------------- END MIDDLE ?>
                  <?php if ($objyesum2u_middle['comproju_middle'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#008500; text-align: center;"><?php echo $objyesum2u_middle['comproju_middle'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== MIDDLE =================== -->

                <td>
                  <?php $sql_yesum2u_big = 'SELECT COUNT(ProStatus) AS comproju_big FROM tbl_proj WHERE ProStatus = 5 and ProLavel = 3 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesum2u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                    $sql_yesum2u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum2u_big = mysql_query($sql_yesum2u_big);
                  $objyesum2u_big = mysql_fetch_assoc($rs_yesum2u_big);
                  //-------------------------------- END BIG ?>
                  <?php if ($objyesum2u_big['comproju_big'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#0000ff; text-align: center;"><?php echo $objyesum2u_big['comproju_big'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== BIG =================== -->

                <td>
                <?php
                //----------------------------------------------
                /*$sql_yesum3u = 'SELECT COUNT(ProStatus) AS opproju FROM tbl_proj WHERE ProStatus = 1 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum3u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum3u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum3u = mysql_query($sql_yesum3u);
                $objyesum3u = mysql_fetch_assoc($rs_yesum3u);*/
                //echo $objyesum3u['opproju']." (S: , M: , L: ) ";
                //----------------------------------------------
                $sql_yesum3u_small = 'SELECT COUNT(ProStatus) AS opproju_small FROM tbl_proj WHERE ProStatus = 1 and ProLavel = 1 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum3u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum3u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum3u_small = mysql_query($sql_yesum3u_small);
                $objyesum3u_small = mysql_fetch_assoc($rs_yesum3u_small);
                //----------------------- END SMALL
                ?>
                <?php if ($objyesum3u_small['opproju_small'] == 0) { ?>
                <c></c>
                <?php }else { ?>
                <c style="color:#ff0000; text-align: center;"><?php echo $objyesum3u_small['opproju_small'] ?></c>
                <?php } ?>
                </td>
                <!-- =================== SMALL =================== -->

                <td><?php $sql_yesum3u_middle = 'SELECT COUNT(ProStatus) AS opproju_middle FROM tbl_proj WHERE ProStatus = 1 and ProLavel = 2 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum3u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum3u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum3u_middle = mysql_query($sql_yesum3u_middle);
                $objyesum3u_middle = mysql_fetch_assoc($rs_yesum3u_middle);
                //----------------------- END MIDDLE ?>
                  <?php if ($objyesum3u_middle['opproju_middle'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#008500; text-align: center;"><?php echo $objyesum3u_middle['opproju_middle'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== MIDDLE =================== -->

                <td><?php $sql_yesum3u_big = 'SELECT COUNT(ProStatus) AS opproju_big FROM tbl_proj WHERE ProStatus = 1 and ProLavel = 3 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum3u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum3u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum3u_big = mysql_query($sql_yesum3u_big);
                $objyesum3u_big = mysql_fetch_assoc($rs_yesum3u_big);
                //----------------------- END BIG ?>
                <?php if ($objyesum3u_big['opproju_big'] == 0) { ?>
                <c></c>
                <?php }else { ?>
                <c style="color:#0000ff; text-align: center;"><?php echo $objyesum3u_big['opproju_big'] ?></c>
                <?php } ?>
                </td>
                <!-- =================== BIG =================== -->

                <td>
                <?php
                //----------------------------------------------
                /*$sql_yesum4u = 'SELECT COUNT(ProStatus) AS ohproju FROM tbl_proj WHERE ProStatus = 2 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                    $sql_yesum4u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                    $sql_yesum4u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum4u = mysql_query($sql_yesum4u);
                $objyesum4u = mysql_fetch_assoc($rs_yesum4u);*/
                //echo $objyesum4u['ohproju']." (S: , M: , L: ) ";
                //----------------------------------------------
                $sql_yesum4u_small = 'SELECT COUNT(ProStatus) AS ohproju_small FROM tbl_proj WHERE ProStatus = 2 and ProLavel = 1 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                    $sql_yesum4u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                    $sql_yesum4u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum4u_small = mysql_query($sql_yesum4u_small);
                $objyesum4u_small = mysql_fetch_assoc($rs_yesum4u_small);
                //------------------------------- END SMALL
                ?>
                <?php if ($objyesum4u_small['ohproju_small'] == 0) { ?>
                <c style="text-align: center;"></c>
                <?php }else { ?>
                <c style="color:#ff0000; text-align: center;"><?php echo $objyesum4u_small['ohproju_small'] ?></c>
                <?php } ?>
                </td>
                <!-- =================== SMALL =================== -->

                <td>
                  <?php
                  $sql_yesum4u_middle = 'SELECT COUNT(ProStatus) AS ohproju_middle FROM tbl_proj WHERE ProStatus = 2 and ProLavel = 2 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                      $sql_yesum4u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                      $sql_yesum4u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum4u_middle = mysql_query($sql_yesum4u_middle);
                  $objyesum4u_middle = mysql_fetch_assoc($rs_yesum4u_middle);
                  //------------------------------- END MIDDLE ?>
                  <?php if ($objyesum4u_middle['ohproju_middle'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="color:#008500; text-align: center;"><?php echo $objyesum4u_middle['ohproju_middle'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== MIDDLE =================== -->

                <td>
                  <?php
                  $sql_yesum4u_big = 'SELECT COUNT(ProStatus) AS ohproju_big FROM tbl_proj WHERE ProStatus = 2 and ProLavel = 3 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                      $sql_yesum4u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                      $sql_yesum4u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum4u_big = mysql_query($sql_yesum4u_big);
                  $objyesum4u_big = mysql_fetch_assoc($rs_yesum4u_big);
                  //------------------------------- END BIG ?>
                  <?php if ($objyesum4u_big['ohproju_big'] == 0) { ?>
                  <c style="text-align: center;"></c>
                  <?php }else { ?>
                  <c style="color:#0000ff; text-align: center;"><?php echo $objyesum4u_big['ohproju_big'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== BIG =================== -->


                <td>
                <?php
                //----------------------------------------------
                /*$sql_yesum5u = 'SELECT COUNT(ProStatus) AS clproju FROM tbl_proj WHERE ProStatus = 3 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum5u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                   $sql_yesum5u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum5u = mysql_query($sql_yesum5u);
                $objyesum5u = mysql_fetch_assoc($rs_yesum5u);*/
                //echo $objyesum5u['clproju']." (S: , M: , L: ) ";
                //----------------------------------------------
                $sql_yesum5u_small = 'SELECT COUNT(ProStatus) AS clproju_small FROM tbl_proj WHERE ProStatus = 3 and ProLavel = 1 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum5u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                   $sql_yesum5u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum5u_small = mysql_query($sql_yesum5u_small);
                $objyesum5u_small = mysql_fetch_assoc($rs_yesum5u_small);
                //------------------------------- END SMALL
                ?>
                <?php if ($objyesum5u_small['clproju_small'] == 0) { ?>
                <c></c>
                <?php }else { ?>
                <c style="color:#ff0000; text-align: center;"><?php echo $objyesum5u_small['clproju_small'] ?></c>
                <?php } ?>
                </td>
                <!-- =================== SMAll =================== -->

                <td>
                  <?php
                  $sql_yesum5u_middle = 'SELECT COUNT(ProStatus) AS clproju_middle FROM tbl_proj WHERE ProStatus = 3 and ProLavel = 2 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesum5u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                     $sql_yesum5u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum5u_middle = mysql_query($sql_yesum5u_middle);
                  $objyesum5u_middle = mysql_fetch_assoc($rs_yesum5u_middle);
                  //------------------------------- END MIDDLE ?>
                  <?php if ($objyesum5u_middle['clproju_middle'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#008500; text-align: center;"><?php echo $objyesum5u_middle['clproju_middle'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== MIDDLE =================== -->

                <td>
                  <?php
                  $sql_yesum5u_big = 'SELECT COUNT(ProStatus) AS clproju_big FROM tbl_proj WHERE ProStatus = 3 and ProLavel = 3 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesum5u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                     $sql_yesum5u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum5u_big = mysql_query($sql_yesum5u_big);
                  $objyesum5u_big = mysql_fetch_assoc($rs_yesum5u_big);
                  //------------------------------- END BIG ?>
                  <?php if ($objyesum5u_big['clproju_big'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#0000ff; text-align: center;"><?php echo $objyesum5u_big['clproju_big'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== BIG =================== -->


                <td>
                <?php
                //----------------------------------------------
                /*$sql_yesum6u = 'SELECT COUNT(ProStatus) AS calproju FROM tbl_proj WHERE ProStatus = 4 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum6u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum6u.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum6u = mysql_query($sql_yesum6u);
                $objyesum6u = mysql_fetch_assoc($rs_yesum6u);*/
                //echo $objyesum6u['calproju']." (S: , M: , L: ) ";
                //----------------------------------------------
                $sql_yesum6u_small = 'SELECT COUNT(ProStatus) AS calproju_small FROM tbl_proj WHERE ProStatus = 4 and ProLavel = 1 and ProCreateUser = "'.$row['UserID'].'" ';
                if ($_POST['year'] == Date("Y")) {
                  $sql_yesum6u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }else{
                  $sql_yesum6u_small.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                }
                $rs_yesum6u_small = mysql_query($sql_yesum6u_small);
                $objyesum6u_small = mysql_fetch_assoc($rs_yesum6u_small);
                //----------------------------- END SMALL
                ?>
                <?php if ($objyesum6u_small['calproju_small'] == 0) { ?>
                <c></c>
                <?php }else { ?>
                <c style="color:#ff0000; text-align: center;"><?php echo $objyesum6u_small['calproju_small'] ?></c>
                <?php } ?>
              </td>
              <!-- =================== SMALL =================== -->

                <td>
                  <?php
                  $sql_yesum6u_middle = 'SELECT COUNT(ProStatus) AS calproju_middle FROM tbl_proj WHERE ProStatus = 4 and ProLavel = 2 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesum6u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                    $sql_yesum6u_middle.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum6u_middle = mysql_query($sql_yesum6u_middle);
                  $objyesum6u_middle = mysql_fetch_assoc($rs_yesum6u_middle);
                  //----------------------------- END MIDDLE ?>
                  <?php if ($objyesum6u_middle['calproju_middle'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#008500; text-align: center;"><?php echo $objyesum6u_middle['calproju_middle'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== MIDDLE =================== -->

                <td>
                  <?php
                  $sql_yesum6u_big = 'SELECT COUNT(ProStatus) AS calproju_big FROM tbl_proj WHERE ProStatus = 4 and ProLavel = 3 and ProCreateUser = "'.$row['UserID'].'" ';
                  if ($_POST['year'] == Date("Y")) {
                    $sql_yesum6u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }else{
                    $sql_yesum6u_big.= ' and  Date(ProCreateDate) BETWEEN  "'.$_POST['year'].'-1-1" and "'.$_POST['year'].'-12-31" ';
                  }
                  $rs_yesum6u_big = mysql_query($sql_yesum6u_big);
                  $objyesum6u_big = mysql_fetch_assoc($rs_yesum6u_big);
                  //----------------------------- END BIG ?>
                  <?php if ($objyesum6u_big['calproju_big'] == 0) { ?>
                  <c></c>
                  <?php }else { ?>
                  <c style="color:#0000ff; text-align: center;"><?php echo $objyesum6u_big['calproju_big'] ?></c>
                  <?php } ?>
                </td>
                <!-- =================== BIG =================== -->

            </tr>
                <?php }mysql_close($c);?>
            </tbody>
    </table>
  </div>
</div>
<script>
    $(function() {
      $("#tablesumall").DataTable();

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
				  data: ['Complete', 'Open', 'On Hold', 'Closed', 'Cancelled']
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
            '#01DF74', '#0080FF', '#848484', '#DF7401',
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
				  }, {
					value: <?php echo $clop;?>,
					name: 'Closed'
				  }, {
					value: <?php echo $clp;?>,
					name: 'Cancelled'
				  }]
				}]
			  });

			}


    });
</script>
