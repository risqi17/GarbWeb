<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Garb Login</title>
	<link rel="shortcut icon" href="../assets/images/Goputsalgaji.png">
    <!-- Bootstrap -->
    <link href="http://localhost/garb/assets/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/garb/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/garb/assets/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/garb/assets/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="http://localhost/garb/assets/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/garb/assets/custom.min.css" rel="stylesheet">
    <link href="http://localhost/garb/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="http://localhost/garb/assets/css/demo.css" rel="stylesheet" />
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
              <h1>Administration</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-success btn-fill" name="adm">&nbsp;Masuk</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><font color="#395e5c">Garb  (Jahit-Online)</font></h1>
                  <p>Garb By Yeye-Team</p>
                  <p>©2017 All Rights Reserved</p>
                </div>
              </div>
			  </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  
  <script src="http://localhost/garb/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="http://localhost/garb/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="http://localhost/garb/assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="http://localhost/garb/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="http://localhost/garb/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="http://localhost/garb/assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="http://localhost/garb/assets/js/demo.js"></script>
	
	<?=$this->session->flashdata('pesan')?>

</html>

