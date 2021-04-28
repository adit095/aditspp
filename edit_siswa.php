<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['nisn'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $nisn = ($_GET["nisn"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_siswa WHERE nisn='$nisn'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='spp.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='spp.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    h2 {
        text-transform: uppercase;
        color: salmon;
      }
    h3 {
        text-transform: uppercase;
        color: salmon;
      }
    h5 {
        text-transform: uppercase;
        color:#999999;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
<body>
 
  <?php
  
  include ('header.php');
?>
  

      <center>
  
        <h2>Edit Siswa <?php echo $data['nisn']; ?></h2>
      <center>
      <form method="POST" action="proses_editsiswa.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="kode" value="<?php echo $data['nisn']; ?>"  hidden />

        <center>
        <div>
          <label>Nama</label>
          <input type="text" name="nama" required="required" />
        </div>
        <div>
          <label>Kelas</label>
          <select name="klas">
              <option value="not_option">Pilih Kelas...</option>
                  <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
      $query = "SELECT * FROM tb_kelas ORDER BY nama_kelas ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
 <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
 <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>              
          </select>
        </div>
        

        <div>
          <label>Alamat</label>
            <input type="text" name="amalat" required="required">
        </div>

        <div>
          <label>No Telp</label>
            <input type="text" name="nomor" required="required">
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
      </center>
        </section>
      </form>
</body>
</html>
