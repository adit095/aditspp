
<?php
include 'koneksi.php';
		

	$petugas	=	$_POST['id_petugas'];
	$nisn		=	$_POST['nisn'];
	$tanggal	=	$_POST['tgl'];
	$bulan		=	$_POST['bln'];
	$tahun		=	$_POST['thn'];
	$spp		=	$_POST['id_spp'];
	$jmlh		=	$_POST['Jumlah'];

			$query	=	"INSERT INTO tb_pembayaran VALUES ('','$petugas','$nisn','$tanggal','$bulan','$tahun','$spp','$jmlh')";
			$result	=	mysqli_query($koneksi, $query);

			if (!$result) {
				die("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}else{
				echo "<script>alert('Data berhasil ditambah.');window.location='transaksi.php';</script>";

			}

?>