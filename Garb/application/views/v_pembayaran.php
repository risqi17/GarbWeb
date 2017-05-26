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
                <li class="">
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
                <li class="active">
                    <a href="<?php echo base_url('Pembayaran'); ?>">
                        <i class="pe-7s-cash"></i>
                        <p>Pembayaran</p>
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
                          <a href="">
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
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Pelanggan</h4>
                                <p class="category">Anda dapat merubah data disini</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No</th>
										<th>id pembayaran</th>
										<th>id pemesan</th>
										<th>jenis bayar</th>
										<th>status</th>
                                    </thead>
                                    <tbody>
                                       <?php
											$no = 1;
											foreach($pembayaran as $p){
												?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p->id_pembayaran ?></td>
													<td><?php echo $p->id_pemesanan ?></td>
													<td><?php echo $p->jenis_bayar ?></td>
													<td><?php echo $p->status ?></td>

												</tr>
											<?php } ?>
                                    </tbody>
                                </table>

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
