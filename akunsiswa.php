<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Steacha - Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <!-- link popup -->
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Admin</a> 
            </div>
  <div style="color: white;
	padding: 15px 50px 5px 50px;
	float: right;
	font-size: 16px;"><a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/aprian.jpg" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="admin.php"><i class="fa fa-home fa-2x"></i>Beranda</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-user fa-2x"></i>Guru<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inputguru.php"><i class="fa fa-edit fa-1x"></i>Data Guru</a>
                            </li>
                            <li>
                                <a href="akunguru.php"><i class="fa fa-user fa-1x"></i>Akun Guru</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-user fa-2x"></i>Siswa<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="inputsiswa.php"><i class="fa fa-edit fa-1x"></i>Data Siswa</a>
                            </li>
                            <li>
                                <a class="active-menu" href="akunsiswa.php"><i class="fa fa-user fa-1x"></i>Akun Siswa</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="absensi.php"><i class="fa fa-clipboard fa-2x"></i>Absensi</a>
                    </li>
					<li>
                        <a href="jadwalpengajar.php"><i class="fa fa-list-alt fa-2x"></i>Jadwal Pengajar</a>
                    </li>
					<li>
                        <a href="jadwalsiswa.php"><i class="fa fa-list-alt fa-2x"></i>Jadwal Siswa</a>
                    </li>
					<li>
                        <a href="kalender.php"><i class="fa fa-calendar fa-2x"></i>Kalender Akademik</a>
                    </li>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<div class="md-modal md-effect-16" id="modal-16">
							<div class="md-content">
								<h3>Input Akun Siswa</h3>
								<div>
									<form role="form" method="POST" action="inputakun.php">
                                        <div class="form-group">
                                            <label>username</label>
                                            <input class="form-control" type="text" placeholder="Username" name="username" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="text" placeholder="Password" name="password" required/>
                                        </div>
										<div class="form-group">
											<label>Level</label>
											<select class="form-control" name="level">
												<option>siswa</option>
											</select>
										</div>
										
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
								</div>
							</div>
						</div>
                     <button class="md-trigger" data-modal="modal-16" style="border-radius:5px">Input Akun Siswa</button> 
					 <div class="md-overlay"></div><!-- the overlay element -->
                    </div>
					
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Akun Siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<div class="panel panel-default">									
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover" style="text-align:center">
														<thead>
															<tr>
																<th style="text-align:center">No</th>
																<th style="text-align:center">Username</th>
																<th style="text-align:center">Password</th>
																<th style="text-align:center">Level</th>
																<th colspan="3" style="text-align:center">Proses</th>
															</tr>								
														</thead>
															<?php
															include ("koneksi.php");
															$level = $_POST['level'];
															$view=mysql_query("SELECT * FROM login where level = 'siswa'");
															$no=1;
															while($row=mysql_fetch_array($view)){
															?>
														<tbody>
															<tr>
																<td><?php echo $no?></td>
																<td><?php echo $row['username']; ?></td>
																<td><?php echo $row['password']; ?></td>
																<td><?php echo $row['level']; ?></td>
																<td>
																	<form method="post" action="editakun.php?id=<?php echo $row['id']; ?>">
																	<button type="submit" class="btn btn-primary">Edit</button>
																	</form>
																</td>
																<td>
																	<form method="post" action="deleteakun.php?id=<?php echo $row['id']; ?>">
																	<button type="submit" class="btn btn-primary" onClick="return confirm('Apakah Anda Yakin?')">Delete</button>
																	</form>																
																</td>
															</tr>
															<?php				
																$no++;
																}
															?>
														</tbody>
													</table>
											
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
    
   
</body>
</html>
