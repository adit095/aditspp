<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id = $_POST['id'];

  $kode     = $_POST['kode'];
  $tgl      = $_POST['tgl'];
  $bln      = $_POST['bln'];
  $thn      = $_POST['thn'];

  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE tb_pembayaran SET nisn = '$kode', tgl_bayar='$tgl', bulan_dibayar='$bln', tahun_dibayar='$thn'  WHERE id_pembayaran = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='spp.php';</script>";
                    }
              
        
        ?>
