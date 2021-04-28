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
        <h2>Tambah Petugas</h2>
      <center>
      <form method="POST" action="proses_tambahpetugas.php" enctype="multipart/form-data" >
      <section class="base">
        
          <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Username</label>
         <input type="text" name="username" autofocus="" required=""/>
        </div>
        <div>
          <label>Password</label>
          <input type="Password" name="password" autofocus="" required="">
        </div>
		<div>
          <label>level</label>
         <select name="level">
           <option value="admin">Admin</option>
           <option value="petugas">Petugas</option>
         </select>
        </div>
         
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
</body>
</html>