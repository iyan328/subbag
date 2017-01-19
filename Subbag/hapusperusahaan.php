
<?php
	include "koneksi.php";
	if(isset($_GET['kode'])){
		$kode = $_GET['kode'];
	} else {
		echo "<script>alert('Data Belum Dipilih');document.location='perusahaan.php'</script>";
	}
	$sql = "delete from akun WHERE username='$kode'";
	$kueri = mysql_query($sql);

	
	if ($kueri){
				echo "<script> alert('Data berhasil dihapus');document.location='perusahaan.php'</script>";
			}
			else {
				echo "<script> alert('Data gagal dihapus')</script>";
				echo mysql_error();
			}
	?>