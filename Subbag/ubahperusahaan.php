
<?php
	include "koneksi.php";
	if(isset($_GET['kode'])){
		$kode = $_GET['kode'];
	} else {
		echo "<script>alert('Data Belum Dipilih');document.location='perusahaan.php'</script>";
	}
	$sql = "SELECT * FROM perusahaan WHERE nama='$kode'";
	$kueri = mysql_query($sql);
	$data = mysql_fetch_array($kueri);
	$nama = $data['nama'];
	$alamat= $data['alamat'];
	$jumlah= $data['jumlah'];
	$tanggal= $data['tanggal'];
	?>
<html>
<head><title>Ubah Perusahaan</title></head>
<body> 
<h1>Ubah Perusahaan</h1><hr/>
<a href="homesubbag.php?"> Home </a> <a href="perusahaan.php?"> /Perusahaan </a>  /Ubah Perusahaan  <br><br>
<form action="" method="post">
			<div class="control-group" >
                <label for="nama">Nama Perusahaan</label>
				<input name="nama" type ="text" id="nama" value="<?php echo $nama?>" readonly/>
            </div>

            <div class="control-group">
                <label for="alamat">Alamat Perusahaan</label>
                <input name="alamat" type="text" id="alamat" value="<?php echo $alamat?>"required/>
            </div>
			
			<div class="control-group" >
                <label for="jumlah">Jumlah Lowongan Magang Yang Dibutuhkan</label>
				<input name="jumlah" type ="text" id="jumlah" value="<?php echo $jumlah?>" required/>
            </div>

            <div class="control-group">
                <label for="tanggal">Tanggal</label>
                <input name="tanggal" type="date" id="tanggal" value="<?php echo $tanggal?>"required/>
            </div>

            </fieldset>

        <fieldset id="FormAction">

            <input name="tblEdit" type="submit" id="tblEdit" value="Ubah"/>
        </fieldset>
    </form>
		</body>
		</html>
		
		
		
		<?php
		include "koneksi.php";
		if (isset($_POST['tblEdit'])){
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jumlah = $_POST['jumlah'];
			$tanggal = $_POST['tanggal'];
			$sql = "UPDATE perusahaan set alamat='$alamat', jumlah='$jumlah', tanggal='$tanggal' where nama='$nama'";
			$kueri = mysql_query($sql);
			if ($kueri){
				echo "<script> alert('Data Perusahaan berhasil diubah');document.location='perusahaan.php'</script>";
			}
			else {
				echo "<script> alert('Data Perusahaan gagal diubah');document.location='perusahaan.php'</script>";
				echo mysql_error();
			}
		}
		?>