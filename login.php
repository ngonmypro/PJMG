<?php session_start();
date_default_timezone_set("Asia/Bangkok");
if (!isset($_SESSION['ssUserID'])) { ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/mg.png" type="image/png" />

    <title>Project Management</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="js/fload.js"></script>
        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
  </head>

  <body class="login" onload="javascript:showscreen();">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <!--<div class="animate form login_form">-->
          <section class="login_content">
            <form>
              <img src="images/yc.png" alt="" whidth="20%"><br>
              <div>
                <input type="text" class="form-control" id="user1" placeholder="Username" required onKeyUp="checkKey(this.id);" />
              </div>
              <div>
                <input type="password" class="form-control" id="pass1" placeholder="Password" required onKeyUp="checkKey(this.id);" />
              </div>
              <div id="alertlog"></div>
              <div>
                <a class="btn btn-default submit" href="javascript:login();">Log in</a>
                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>-->

                <div class="clearfix"></div>
                <br />

                <div>
                  <font size="5">Project Management</font>
                  <p>©2018 All Rights Reserved. Create By Yong Group IT Team.</p>
                </div>
              </div>
            </form>
          </section>
        <!--</div>-->
      </div>
    </div>
  </body>
</html>
<?php } else { header('Location:index.php'); }?>
