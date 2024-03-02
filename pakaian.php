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
          <a class="nav-link" href="transaksi.php"><b>Data Transaksi</b></a>
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
  <h3>Data Pakaian</h3>
  <hr>
  <div class="tombol" >
    <a href="tambahdatapakaian.php"><button type="button" class="btn btn-success btn-md " >Tambah Data </button></a>
  </div>
  <br>
<div class="table-responsive">
  <table id="table" class="table table-striped table-bordered" >
    <thead>
      <tr>
        <th style="text-align: center;">No</th>
        <th>Kode Pakaian</th>
        <th>Jenis Pakaian</th>
        <th style="text-align: center;" >Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "./include/koneksi.php";
        $i = 0 + 1;
        $sql = mysqli_query($conn, "SELECT * FROM pakaian ORDER BY Id_Pakaian");
        while ($hasil = mysqli_fetch_array($sql)) {
    ?>
  <tr>
      <td style="text-align: center;"><?php echo $i; ?></td>
      <td><?php echo $hasil['Id_Pakaian']; ?></td>
      <td><?php echo $hasil['Jenis_Pakaian']; ?></td>
      <td style="text-align: center;">
      <a href="editdatapakaian.php?edit=<?php echo $hasil['Id_Pakaian']; ?>" class="btn btn-warning">Edit</a>
      <a href="proses-hapus-pakaian.php?hapus=<?php echo $hasil['Id_Pakaian']; ?>" class="btn btn-danger">Hapus</a></td>
  </tr>
  <?php
      $i++;
      }
    ?>

  </tbody>
  </table>
  </div>
<br>
<br>
<br>
</div>



<script>
    $(document).ready(function() {
	   $('#table').DataTable();
	} );
</script>
</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
