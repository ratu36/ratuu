<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>

    <?php
      include "include/header.php";
    ?>


<style>
      body {
        background-color:#FFB6C1;
      }
    </style>


  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-#FFB6C1;
      }">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LAUNDRY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index1.php"><b>Beranda</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pelanggan.php"><b>Data Pelanggan</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pakaian.php"><b>Data Pakaian</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="tambahdatatransaksi.php"><b>Transaksi Laundry</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi"><b>Data Transaksi</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekap.php"><b>Laporan</b></a>
        </li>
      </ul>
    </div>
  </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Form Tambah Data Pakaian</h3>
  <hr>
  <br>
        <form action="proses-tambah-pakaian.php" method="POST" >

                <div class="form-group">
                  <label>Kode Pakaian</label>
                  <input type="text" class="form-control" name="Id_Pakaian" placeholder="Kode Pakaian" style="width: 250px" >
                </div>
                <div class="form-group">
                  <label>Jenis Pakaian</label>
                  <input type="text" class="form-control" name="Jenis_Pakaian" placeholder="Jenis Pakaian" style="width: 250px" >
                </div>
              <input type="submit" name="submit" value="Simpan" class="btn btn-success">
              <a href="pakaian.php"><input type="button" class="btn btn-default" value="Batal" ></a>
              </form>
</div>

</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
