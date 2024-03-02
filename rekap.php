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
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-#FFB6C1">
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
    <!-- yang di print -->
<div class="container">
<button class="btn btn-primary" onclick="printDiv('print')"><i class="bi bi-print"></i>PRINT</button>
<div class="print" id="print">
  <hr>
  <br>
  <form id="filter form" action="" method="GET">
    <div class="row">
      <div class="col-2">
        <input type="date" name="tgl1" class="form-control">
      </div>
      <div class="col-2">
      <input type="date" name="tgl2" class="form-control w-4">
      </div>
      <div class="col-2">
      <input type="submit" value="cari" class="btn btn-primary">
      </div>
    </div>
  <div class="table-responsive">
  <table id="table" class="table table-striped table-bordered" >
    <thead>
      <tr>
        <th style="text-align: center;">No</th>
        <th>No. Order</th>
        <th>Nama</th>
        <th>Tanggal Terima</th>
        <th>Tanggal Ambil</th>
        <th>Berat</th>
        <th>Diskon</th>
        <th>Total Bayar</th>
        
      </tr>
    </thead>

    <tbody>
      <?php
        include "./include/koneksi.php";
        $i = 0 + 1;
        $sql = mysqli_query($conn, "SELECT transaksi.*, pelanggan.Nama FROM transaksi join pelanggan where transaksi.No_urut = pelanggan.No_urut  ORDER BY `No_Order` DESC");
        while ($hasil = mysqli_fetch_array($sql)) {
    ?>
  <tr>
      <td style="text-align: center;"><?php echo $i; ?></td>
      <td><?php echo $hasil['No_Order']; ?></td>
      <td><?php echo $hasil['Nama']; ?></td>
      <td><?php echo $hasil['Tgl_Terima']; ?></td>
      <td><?php echo $hasil['Tgl_Ambil']; ?></td>
      <td><?php echo $hasil['total_berat']; ?></td>
      <td><?php echo $hasil['diskon']; ?></td>
      <td><?php echo $hasil['Total_Bayar']; ?></td>
      <td style="text-align: center;">
      <?php if ($hasil['Tgl_Ambil'] == ""){
        ?>
        
        <?php
            }
        ?>
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
</div>

<script>
    $(document).ready(function() {
	  $('#table').DataTable();
	} );
</script>
</body>

    <!-- tutup halaman yang di print -->
    </div>

<script>
    function printDiv(el) {
        var a= document.body.innerHTML;
        var b= document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = a;
    }
</script>
</html>
<?php
}else{
	header("location:login/index.php");
}
