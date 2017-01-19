<!DOCTYPE html>
<html>
<head><title>Tambah Perusahaan</title></head>

<body> 
<h1>Tambah Perusahaan</h1><hr/>
<a href="homesubbag.php?"> Home </a> <a href="perusahaan.php?"> /Perusahaan </a>  /Tambah Perusahaan  <br><br>
<form action="" method="post">
        

            <div class="control-group" >
                <label for="nama">Nama Perusahaan</label>
				<input name="nama" type ="text" id="nama" required/>
            </div>

            <div class="control-group">
                <label for="alamat">Alamat Perusahaan</label>
                <input name="alamat" type="text" id="alamat"required/>
            </div>
			
			<div class="control-group" >
                <label for="jumlah">Jumlah Lowongan Magang Yang Dibutuhkan</label>
				<input name="jumlah" type ="text" id="jumlah" required/>
            </div>
			
			<div class="control-group" >
                <label for="tanggal">Tanggal</label>
				<input name="tanggal" type ="date" id="tanggal" required/>
            </div>
			

        </fieldset>

        <fieldset id="FormAction">

            <input name="tbltambah" type="submit" id="tbltambah" value="Tambah"/>
        </fieldset>
    </form>

		</body>
		</html>
		
		
		
		<?php
		include "koneksi.php";
		if (isset($_POST['tbltambah'])){
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jumlah = $_POST['jumlah'];
			$tanggal = $_POST['tanggal'];
			$sql = "INSERT INTO perusahaan values('','$nama','$alamat','$jumlah','$tanggal')";
			$kueri = mysql_query($sql);

			if ($kueri){
				echo "<script> alert('Data Perusahaan berhasil dimasukkan ke database');document.location='perusahaan.php'</script>";
			}
			else {
				echo "<script> alert('Data Perusahaan gagal dimasukkan ke database');document.location='tambahperusahaan.php'</script>";
				echo mysql_error();
			}
		}
		?>