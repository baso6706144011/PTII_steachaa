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
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<style type="text/css">
  div{ 
  -moz-border-radius-topleft: 4px; -webkit-border-top-left-radius: 4px; -khtml-border-top-left-radius: 4px; border-top-left-radius: 4px;
  -moz-border-radius-topright: 4px; -webkit-border-top-right-radius: 4px; -khtml-border-top-right-radius: 4px; border-top-right-radius: 4px;
  -moz-border-radius-bottomleft: 4px; -webkit-border-bottom-left-radius: 4px; -khtml-border-bottom-left-radius: 4px; border-bottom-left-radius: 4px;
  -moz-border-radius-bottomright: 4px; -webkit-border-bottom-right-radius: 4px; -khtml-border-bottom-right-radius: 4px; border-bottom-right-radius: 4px;
  }
  .hari{
  float:left;
  margin-left:0.5px;
  padding:2px;
  width:23px;
  color:black;
  text-align:center;
  margin:2px;
  background:#0CF;
  background-image:-webkit-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:-moz-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:-o-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:-ms-linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
  background-image:linear-gradient(top,#ffffff 0%,#3e9ad2 100%);
}
  .tgl{
  float:left;
  padding:1px;
  width:23px;
  margin-left:1px;
  text-align:center;
  margin:2px;
  color:black;
  background:#CCC;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(25%, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  }
  .tgl:hover{
  background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb), to(#0064cd));
  background-image: -moz-linear-gradient(top, #049cdb, #0064cd);
  background-image: -ms-linear-gradient(top, #049cdb, #0064cd);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb), color-stop(100%, #0064cd));
  background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);
  margin-left:1px;
  background-image: -o-linear-gradient(top, #049cdb, #0064cd);
  background-image: linear-gradient(top, #049cdb, #0064cd);
  color:#FFF;
  }
  .float_habis{
  padding:0px;
  color:black;
  text-align:center;
  margin-left:0.5px;
  }
  .tgl_blank{
  float:left;
  margin-left:1px;
  padding:0px;
  width:23px;
  text-align:center;
  color:black;
  margin:2px;
  background:#F8F8F8;
  color:#CCC;
  }

  .tgl_skrng{
  float:left;
  padding:1px;
  width:23px;
  margin-left:1px;
  color:black;
  text-align:center;
  margin:2px;
  background:#FC0;
  }

  .blokbaris{
  padding:1px;
  text-align:center;
  margin-left:2px;
  }
</style>

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
                        <a class="active-menu"  href="admin.php"><i class="fa fa-home fa-2x"></i>Beranda</a>
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
                                <a href="akunsiswa.php"><i class="fa fa-user fa-1x"></i>Akun Siswa</a>
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
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                    </div>
                </div>              
                  <hr />              
                <div class="row"> 
                <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Gambar & Informasi
                        </div>
                        <div class="panel-body">
							<form method="post" action="prosesgambar.php"  enctype="multipart/form-data">
							<div class="form-group">
                                <div class="form-group">
									<label>Ukuran Gambar Max : 1MB</label>
									<input type="file" name="gambar">
								</div>
									
								</div>
							</form>
							<form method="post" action="inputinfo.php">
								<div class="form-group">
									<textarea name="info" placeholder="Masukkan Informasi" class="form-control" rows="5" required></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">                       
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-footer back-footer-green">
							<?php
								$now = getdate(time());
								$time = mktime(0,0,0, $now['mon'], 1, $now['year']);
								$date = getdate($time);
								$dayTotal = cal_days_in_month(0, $date['mon'], $date['year']);
								print '<strong>' . $date['month'] . '</strong>';
							?>
                        </div>
                        <div class="panel-body">
							<?php
							//Print the calendar header with the month name.
							print '<div class=blokbaris>';
							$hari=array('Mo','Su','Tu','We','Th','Fr','Sa');
							for ($i = 0; $i < 7; $i++) { 
							print "<div class='hari'>$hari[$i]</div>";
							}
							print '<div class=float_habis>&nbsp;</div></div>';

							for ($i = 0; $i < 6; $i++) {
							print '<div class=blokbaris>';
							for ($j = 1; $j <= 7; $j++) {
							$dayNum = $j + $i*7 - $date['wday'];
							//Print a cell with the day number in it.  If it is today, highlight it.
							print '<div';
							if ($dayNum > 0 && $dayNum <= $dayTotal) {
							print ($dayNum == $now['mday']) ? ' class=tgl_skrng>' : ' class=tgl>';
							print "$dayNum";
							}
							else {
							//Print a blank cell if no date falls on that day, but the row is unfinished.
							print ' class=tgl_blank> - ';
							}
							print '</div>';
							}
							print '<div class=float_habis>&nbsp;</div></div>';
							if ($dayNum >= $dayTotal && $i != 6)
							break;
							}
							?> 
                        </div>
						
                    </div>
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
											<div class="form-group">
												<div class="form-group">
													<label>File input</label>
													<input type="file">
												</div>
												<form method="post" action="">
													<button type="submit" class="btn btn-primary">Submit</button>
												</form>
											</div>
										</div>
                    </div>                         
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
