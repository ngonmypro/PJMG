<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<div class="page-title">
    <div class="title_left">
     <h3>Project Gant Chart  <small>Listing design</small></h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Gant Chart  </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div style="position:relative" class="gantt" id='GanttChartDIV'></div>
            </div>
        </div>
    </div>
</div>
<?php if ($_POST['user'] == '0' || $_POST['date1'] != '' || $_POST['date2'] != '') {
        $sql_gc = " SELECT * FROM tbl_proj WHERE `ProDateStart` BETWEEN '".$_POST['date1']."' and '".$_POST['date2']."'" ;
        //$sql_gc = " SELECT * FROM tbl_proj WHERE `ProTeamL` = '".$_POST['user']."' OR `ProTeam` = '".$_POST['user']."'" ;
        //$rsgc = mysql_query($sql_gc) or die(mysql_error());
      }elseif ($_POST['user'] != '' && $_POST['date1'] != '' || $_POST['date2'] != '') {
        $sql_gc = " SELECT * FROM tbl_proj WHERE `ProDateStart` BETWEEN '".$_POST['date1']."' and '".$_POST['date2']."' AND `ProTeamL` =  '".$_POST['user']."' OR `ProTeam` =  '".$_POST['user']."'" ;
        //$sql_gc = " SELECT * FROM tbl_proj WHERE `ProTeamL` = '".$_POST['user']."' OR `ProTeam` = '".$_POST['user']."'" ;
        //$rsgc = mysql_query($sql_gc) or die(mysql_error());
      }elseif ($_POST['user'] != '') {
        $sql_gc = " SELECT * FROM tbl_proj WHERE `ProTeamL` =  '".$_POST['user']."' OR `ProTeam` =  '".$_POST['user']."'" ;
      }else {
        $sql_gc = 'SELECT * FROM tbl_proj';
      }
        $rsgc = mysql_query($sql_gc) or die(mysql_error());
      ?>
<script>
    $(function () {
        var g = new JSGantt.GanttChart(document.getElementById('GanttChartDIV'), 'week');
        g.setCaptionType('Complete');  // Set to Show Caption (None,Caption,Resource,Duration,Complete)
        g.setQuarterColWidth(86);
        g.setDateTaskDisplayFormat('day dd month yyyy'); // Shown in tool tip box
        g.setDayMajorDateDisplayFormat('mon yyyy - Week ww') // Set format to display dates in the "Major" header of the "Day" view
        g.setWeekMinorDateDisplayFormat('dd mon') // Set format to display dates in the "Minor" header of the "Week" view
        g.setShowTaskInfoLink(1); // Show link in tool tip (0/1)
        g.setShowEndWeekDate(0); // Show/Hide the date for the last day of the week in header for daily view (1/0)
        g.setUseSingleCell(10000); // Set the threshold at which we will only use one cell per table row (0 disables).  Helps with rendering performance for large charts.
        g.setFormatArr('Day', 'Week', 'Month', 'Quarter');// Even with setUseSingleCell using Hour format on such a large chart can cause issues in some browsers
            // Parameters                     (pID,                           pName,                            pStart,                                pEnd,                                pStyle,
        <?php while ($rowgc = mysql_fetch_array($rsgc)) { ?>
            g.AddTaskItem(new JSGantt.TaskItem(<?php echo $rowgc['ProjID'];?>,'<?php echo $rowgc['ProName'];?>  ','<?php echo $rowgc['ProDateStart'];?>','<?php echo $rowgc['ProDateEnd'];?>',
           <?php $nowd = strtotime(date("Y-m-d"));
                 $endd = strtotime($rowgc['ProDateEnd']);
                 $sum = ceil(abs($endd - $nowd) / 86400);?>
            <?if($rowgc['ProStatus'] == 1 || $rowgc['ProStatus'] == 2) {?>
            <?php if (date("Y-m-d") < $rowgc['ProDateEnd'] && $sum <= 7 ){ ?>
                 'gtaskyellow'
            <?php }elseif (date("Y-m-d") > $rowgc['ProDateEnd']){ ?>
                 'gtaskred'
            <?php }else{ ?>
                'gtaskblue'
            <?php } ?>
            <?php }elseif($rowgc['ProStatus'] == 3 || $rowgc['ProStatus'] == 4) {?>
                 'ggroupblack'
            <?php }elseif($rowgc['ProStatus'] == 5) {?>
            <?php if ($rowgc['ProDateStu'] > $rowgc['ProDateEnd'] && $rowgc['ProStatus'] == 5){ ?>
                'gtaskred'
            <?php }else{?>
                'gtaskgreen'
        <? } ?>
    <? } ?>
    <? if ($_POST['user'] != '') {
      $name = $_POST['user'];
    }else {
      $name = $rowgc['ProTeamL'];
    }?>
            //pLink pMile, pRes,                              pComp,                           pGroup, pParent, pOpen, pDepend, pCaption, pNotes, pGantt)
            ,  '',     0, '<?php echo $name;?>',<?php echo $rowgc['ProPer'];?>,  0,      0,       1,     '',      '',       '',      g ));
        <?php  } ?>
        g.Draw();
    });
</script>
