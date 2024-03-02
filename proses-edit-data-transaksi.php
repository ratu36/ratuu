<?php
include "include/koneksi.php";

$No_Order = $_POST["No_Order"];
$No_urut = $_POST["No_urut"];
$total_berat = $_POST["total_berat"];
$diskon = $_POST["diskon"];
$total_bayar = $_POST["total_bayar"];
$Tgl_Terima = $_POST["tanggal"];


if(empty($_POST["No_Order"]) || empty($_POST["No_urut"]) || empty($_POST["total_berat"]) || empty($_POST["total_bayar"]) || empty($_POST["tanggal"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=editdatatransaksi.php?edit=<?php echo $No_Order ?>">';
}else{
	$sql = "UPDATE `transaksi` SET `No_urut`='$No_urut', `total_berat`='$total_berat', `diskon`='$diskon', `Total_Bayar`='$total_bayar' WHERE `No_Order` = '$No_Order'";
				$kueri = mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
			echo '<meta http-equiv="refresh" content="0; url=transaksi.php">';
}

?>
