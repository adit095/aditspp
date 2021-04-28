<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$nisn = $_POST['kode'];


// menyeleksi data petugas dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from tb_siswa where username='$username' and nisn='$nisn'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	$_SESSION['username'] = $username;
	header("location:menusiswa.php");

}else{
	header("location:indexv2.php?pesan=gagal");
}



?>