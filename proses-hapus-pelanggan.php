<?php
// Load file koneksi.php
include "include/koneksi.php";
// Ambil data Nu yang dikirim oleh index.php melalui URL
$No_urut = $_GET['hapus'];

// Query untuk menghapus data  berdasarkan Nu yang dikirim
$query = "DELETE FROM pelanggan WHERE No_urut='".$No_urut."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  echo "<script language='javascript'>alert('Berhasil di Hapus');</script>";
  echo '<meta http-equiv="refresh" content="0; url=pelanggan.php">';
}else{
  // Jika Gagal, Lakukan :
  echo "<script language='javascript'>alert('Gagal di Hapus');</script>";
	echo '<meta http-equiv="refresh" content="0; url=pelanggan.php">';
}
?>
