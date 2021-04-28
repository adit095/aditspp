<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
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
        <h2>Transaksi Pembayaran SPP</h2>
          <center>
            <form method="post" action="proses_transaksi.php" enctype="multipart/form-data">
              <section class="base">


                <div>
                  <label>ID Petugas</label>
                  <input type="text" name="id_petugas">
                </div>

                <div>
                  <label>NISN</label>
                  <input type="text" name="nisn">
                </div>

                <div>
                  <label>Tanggal</label>
                  <input type="text" name="tgl">
                

                
                  <label>Bulan</label>
                  <select name="bln">
                    <option value="januari">januari</option>
                    <option value="Febuari">Febuari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option Value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                  </select>
                

                
                  <label>Tahun</label>
                  <input type="text" name="thn">
                </div>

                <div>
                  <label>ID SPP</label>
                  <input type="text" name="id_spp">
                </div>

                <div>
                  <label>Jumlah</label>
                  <input type="text" name="Jumlah">
                </div>

                <div>
                  <button type="submit">Konfirmasi</button>
                </div>
              </section>
          </center>
        </form>
      </center>
     </body>
    </html>