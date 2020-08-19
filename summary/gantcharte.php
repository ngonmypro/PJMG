<?php session_start();
date_default_timezone_set("Asia/Bangkok");
include '../js/conn.php';?>
<script src="https://export.dhtmlx.com/gantt/api.js"></script>
<div class="page-title">
</div>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">

                <!--<input value="Export to Excel" type="button" onclick='testtt();'>-->
                <h2>Gant Chart  </h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div style="position:relative" class="gantt" id='GanttChartDIV'></div>
            </div>
        </div>
    </div>
</div>
<?php //echo $_POST['user']." || ".$_POST['date1']." || ".$_POST['date2'];
  if ($_POST['user'] != '' && $_POST['date1'] != '' && $_POST['date2'] != '') {  //------- กรองทั้งหมด
        $sql_gc = " SELECT * FROM tbl_proj WHERE `ProDateStart` BETWEEN  '".$_POST['date1']."' AND '".$_POST['date2']."' AND `ProTeamL` = '".$_POST['user']."'";
      }elseif ($_POST['user'] != '' && $_POST['date1'] != '' && $_POST['date2'] == '') { //--------- กรอง USER กับวันที่ต้องการ 1 ช่อง
        $sql_gc = " SELECT * FROM tbl_proj WHERE `ProDateStart` BETWEEN  '".$_POST['date1']."' AND NOW() AND `ProTeamL` = '".$_POST['user']."' OR `ProTeam` = '".$_POST['user']."'";
      }elseif ($_POST['user'] != '') { //----------- กรองเฉพาะ USER
        $sql_gc = " SELECT * FROM tbl_proj WHERE `ProTeamL` = '".$_POST['user']."' OR `ProTeam` = '".$_POST['user']."'" ;
        echo "select user";
      }else {
        if ($_POST['user'] == '' && $_POST['date1'] != '' && $_POST['date2'] == '') {  //---------- กรองวันที่ ช่องแรก
          $sql_gc = " SELECT * FROM tbl_proj WHERE ProDateStart BETWEEN '".$_POST['date1']."' AND NOW()";
        }elseif ($_POST['user'] == '' && $_POST['date1'] != '' && $_POST['date2'] != '') {   //---------- กรองวันที่ทั้งหมด
          $sql_gc = " SELECT * FROM tbl_proj WHERE ProDateStart BETWEEN '".$_POST['date1']."' AND '".$_POST['date2']."'";
        }else { //------------ ไม่กรองอะไรเลย
        $sql_gc = " SELECT * FROM tbl_proj";
        }
      }
        $rsgc = mysql_query($sql_gc) or die(mysql_error());
      ?>
<script>
    $(function () {
        var g = new JSGantt.GanttChart(document.getElementById('GanttChartDIV'), 'week');
        g.setCaptionType('Complete');  // Set to Show Caption (None,Caption,Resource,Team,Duration,Complete)
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
    <? if ($rowgc['ProTeam'] == 'null') {
      $team = '';
    }else {
    $team = ','.$rowgc['ProTeam'];
    }?>
            //pLink pMile, pRes,                                    pTeam,                    pComp,                           pGroup, pParent, pOpen, pDepend, pCaption, pNotes, pGantt)
            ,  '',     0, '<?php echo $rowgc['ProTeamL'].$team;?>',<?php echo $rowgc['ProPer'];?>,  0,      0,       1,     '',      '',       '',      g ));
        <?php  } ?>
        g.Draw();
    });

  /*  $(function () {
      gantt.exportToExcel({
    name:"document.xlsx",
    columns:[
        { id:"text",  header:"Title", width:150 },
        { id:"start_date",  header:"Start date", width:250, type:"date" }
    ],
    server:"https://myapp.com/myexport/gantt",
    visual:true,
    cellColors:true
});
});*/
    function testtt() {
      gantt.exportToExcel({
    name:"document.xlsx",
    columns:[
        { id:"text",  header:"Title", width:150 },
        { id:"start_date",  header:"Start date", width:250, type:"date" }
    ],
    server:"https://myapp.com/myexport/gantt",
    visual:true,
    cellColors:true
});
    }
</script>
