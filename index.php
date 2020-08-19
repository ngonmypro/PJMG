<?php session_start();
date_default_timezone_set("Asia/Bangkok");
if (!isset($_SESSION['ssUserID'])) {
  header('Location:login.php');
}else{
include 'js/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Management</title>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
	 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- FullCalendar -->
    <link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
	<!-- jsgantt -->
    <link rel="stylesheet" type="text/css" href="vendors/jsGanttImproved/jsgantt.css" />
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
       <!-- Datatables -->
    <link href="vendors/datatables/jquery.Datatable.css" rel="stylesheet">
    <link href="vendors/datatables/extensions/css/buttons.dataTables.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="js/fload.js"></script>
</head>
<body class="nav-md" onload="javascript:showscreen();">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                     <div class="navbar nav_title" style="border: 0;">
                         <a href="index.php" class="site_title"><i class="fa fa-clipboard"></i> <span>Project Management</span></a>
                       </div>

                         <div class="clearfix"></div>

                          <!-- menu profile quick info -->
                          <div class="profile clearfix">
                            <div class="profile_info">
                              <span>Welcome,</span>
                              <h2><?php echo $_SESSION['ssUserSname']; ?></h2>
                            </div>
                         </div>
                         <!-- /menu profile quick info -->
                         <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                          <!--projectmenu-->
                         <div class="menu_section">
                          <h3>Project Management</h3>
                             <ul class="nav side-menu">
                              <li><a><i class="fa fa-tasks"></i> Project <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                  <li><a href="javascript:pro_home();">Home ProJect</a></li>
                                  <li><a href="javascript:btn_add_pro(<?=$_SESSION['ssUserID']?>);">New Project</a></li>
								  <?php if ($_SESSION['ssUserStatus'] == 1) {?>
                                  <li><a href="javascript:sum_show();">Project Summary</a></li>
                                  <li><a href="javascript:cald_show();">Project Calendar</a></li>
								  <li><a href="javascript:gantt_show();">Project GantCharte</a></li>
                                  <?php } ?>
                             </ul>
                           </li>
                          </ul>
                         </div>
                         <?php if ($_SESSION['ssUserStatus'] == 1) {?>
                         <!--usermenu-->
                          <div class="menu_section">
                          <h3>Users Management</h3>
                             <ul class="nav side-menu">
                              <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                  <li><a href="javascript:users_home();">Home User</a></li>
                                  <li><a href="javascript:btn_add_user();">New User</a></li>
                             </ul>
                           </li>
                          </ul>
                         </div>

                         <div class="menu_section">
                          <h3>Type Management</h3>
                             <ul class="nav side-menu">
                              <li><a><i class="fa fa-tags"></i> Type <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                  <li><a href="javascript:type_home();">Home Type</a></li>
                                  <li><a href="javascript:btn_type_add2();">New Type</a></li>
                             </ul>
                           </li>
                          </ul>
                         </div>
                          <?php } ?>
                        </div>
                        <!-- /sidebar menu -->
                         <!-- /menu footer buttons -->
                         <div class="sidebar-footer hidden-small">
                           <a>
                             <span class="glyphicon " aria-hidden="true"></span>
                           </a>
                           <a>
                             <span class="glyphicon " aria-hidden="true"></span>
                           </a>
                           <a>
                                <span class="glyphicon " aria-hidden="true"></span>
                           </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="javascript:logout();">
                              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                          </div>
                           <!-- /menu footer buttons -->
                          </div>
                      </div>
                       <!-- top navigation -->
                         <div class="top_nav">
                              <div class="nav_menu">
                                <nav>
                               <div class="nav toggle">
                                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                  </div>

                                 <ul class="nav navbar-nav navbar-right">
                                   <li class="">
                                     <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['ssUserSname']; ?>
                                       <span class=" fa fa-angle-down"></span>
                                     </a>
                                     <ul class="dropdown-menu dropdown-usermenu pull-right">
									 <li><a href="javascript:btn_chan_pass(<?=$_SESSION['ssUserID']?>);">Change Password</a></li>
                                      <li><a href="javascript:logout();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                 </li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                         <!-- /top navigation -->
                         <!-- page content -->
                         <div class="right_col" role="main">
                              <div class="">
                                  <div id="mainpage"></div>
                              </div>
                          </div>
                             <!-- footer content -->
                            <footer>
                             <div class="pull-right">
                               Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                              </div>
                             <div class="clearfix"></div>
                           </footer>
                           <!-- /footer content -->
       </div>
    </div>
</body>
</html>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
	<!-- FullCalendar -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>
	<!-- jsgantt -->
    <script language="javascript" src="vendors/jsGanttImproved/jsgantt.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	    <!-- Latest compiled and minified JavaScript -->
    <script src="vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- ECharts -->
    <script src="vendors/echarts/dist/echarts.min.js"></script>
    <script src="vendors/echarts/map/js/world.js"></script>
      <!-- bootstrap-dialog -->
    <script src="vendors/bootstrapdialog/dist/js/bootstrap-dialog.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
     <!-- bootstrap-ckeditor -->
     <script src="vendors/ckeditor4std/ckeditor/ckeditor.js"></script>
         <!-- Datatables -->
    <script src="vendors/datatables/jquery.Datatable.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/dataTables.buttons.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/buttons.flash.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/jszip.min.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/pdfmake.min.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/vfs_fonts.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/buttons.html5.js"></script>
    <script src="vendors/datatables/extensions/buttons/js/buttons.print.js"></script>
                         <?php } ?>
