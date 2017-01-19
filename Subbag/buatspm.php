<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
die("Anda belum login");//jika belum login jangan lanjut..
}
else{
	$nm = $_SESSION['username'];
}

//cek level user
if($_SESSION['hak_akses']!="sbk"){
die("Anda bukan Sub Bag Kerjasama");//jika bukan admin jangan lanjut
}
?>
<?php
	include "koneksi.php";
	
	$sql = "SELECT * FROM sbk WHERE username='$nm'";
	$kueri = mysql_query($sql);
	$data = mysql_fetch_array($kueri);
	$username = $data['username'];
	$nik= $data['nik'];
	$nama= $data['nama'];
	?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page Sub Bagian Kerjasama</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homesubbag.php">Sub Bagian Kerjasama</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
			
			
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nama?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li> -->
                        <li>
                            <a href="setting.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="homesubbag.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#m"><i class="fa fa-fw fa-arrows-v"></i> Magang <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="m" class="collapse">
                            <li>
                                <a href="../upload-download-files/spm.php"><i class="fa fa-fw fa-desktop"></i>Surat Pengantar</a>
                            </li>
							<li>
                                <a href="buatspm.php"><i class="fa fa-fw fa-desktop"></i>Buat Surat Pengantar</a>
                            </li>
							<li>
                                <a href="perusahaan.php"><i class="fa fa-fw fa-desktop"></i>Lowongan Magang</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Buat Surat Pengantar <small><?php echo $nama?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href = "homesubbag.php"> Dashboard </a>
                            </li>
							<li class="active">
                                <i class="fa fa-desktop"></i> Buat Surat Pengantar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h2>Bordered with Striped Rows</h2> -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
										<th>Perusahaan</th>
										<th>Buat</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
										include "koneksi.php";
										//$sql = "SELECT * FROM magang where verifikasi = 'Sudah'";
										//$kueri = mysql_query($sql);
										$sql = "SELECT * FROM magang group by perusahaan";
										$kueri = mysql_query($sql);
										
										$no=1;
										while($data = mysql_fetch_array($kueri)){
										$peru_1 = $data['perusahaan'];
										//$nim = $data['nim'];
										//$sql1 = "SELECT * FROM mhs WHERE nim='$nim'";
										//$kueri1 = mysql_query($sql1);
										//$data1 = mysql_fetch_array($kueri1);
										$query_sp = "SELECT * FROM sp where perusahaan = '$peru_1'";
										$cek_sp = mysql_query($query_sp);
										$data_sp = mysql_fetch_array($cek_sp);
									?>
									<?php // if($data_sp['perusahaan']==""){ ?>
									<tr class="satu">
									<td><?php echo $data['perusahaan']?></td>
									<!--<td><?php echo $data1['nama']?></td>
									<td><?php echo $data['perusahaan']?></td>
									<td><?php echo $data['tgl_masuk']?></td>
									<td><?php echo $data['tgl_keluar']?></td>
									<td><?php echo $data['jalur']?></td>-->
									
									<td><a href="../upload-download-files/buatspm.php?kode=<?php echo $data['perusahaan']?>"> Buat </a> </td>
									</tr>
									<?php
									//}
										$no++;}
										
									?>
                                </tbody>
                            </table>
                        </div>
					</div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>