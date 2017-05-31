<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Administration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="http://localhost/garb/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="http://localhost/garb/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="http://localhost/garb/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="http://localhost/garb/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="http://localhost/garb/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Yeye-Team
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url('admin'); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Admin</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('model'); ?>">
                        <i class="pe-7s-display1"></i>
                        <p>Model</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('penjahit'); ?>">
                        <i class="pe-7s-user"></i>
                        <p>Penjahit</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('User'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Pelanggan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Pemesanan'); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Pesanan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Pembayaran'); ?>">
                        <i class="pe-7s-cash"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Feedback'); ?>">
                        <i class="pe-7s-repeat"></i>
                        <p>Feedback</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Garb - Jahit Online</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="<?php echo base_url('admin/profil'); ?>">
                               <p>Hai, <?php echo $this->session->userdata("nama"); ?></p>
                           </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('login/logout'); ?>">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


       
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                               <?php foreach ($administrator as $p){ ?>
                                <form method="post" action="<?php echo base_url(). 'admin/update_profil'; ?>" enctype="multipart/form-data">
                                    
                                       <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" value="<?php echo $p->username; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Company" value="<?php echo $p->nama_admin; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Company" value="<?php echo $p->email; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Company" value="<?php echo $p->password; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Foto Profil</label>
                                               <input type="hidden" name="foto_lama" value="<?php echo $p->foto; ?>">
                                                <input type="file" class="form-control" name="foto" >
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="http://localhost/garb/images/pic04.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="http://localhost/garb/images/<?php
																		 if($p->foto == ''){
																			 echo 'gg.png';
																		 }else{
																			 echo $p->foto;
																		 }
																		 ?>" alt="..."/>

                                      <h4 class="title"><?php echo $p->nama_admin; ?><br />
                                         <small><?php echo $p->email; ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Garb Application <br>
                                                    Serving everyone with love <br>
                                                    Always try to be better"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                               
					<?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Yeye Team</a>, Making A Great App For Everyone
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
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

</html>
