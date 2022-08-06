<?php
include '../config.php';

$id_transaksi=$_POST['id_transaksi'];
$id_pembeli=$_POST['id_pembeli'];  
$id_barang = $_POST['id_barang'];
$tanggal=$_POST['tanggal'];
$query="INSERT INTO transaksi (id_transaksi,id_pembeli,id_barang,tanggal) VALUES ('$id_transaksi','$id_pembeli','$id_barang','$tanggal')";
$a=mysqli_query($mysql, $query);
	if ($a) {
  echo "<script>alert('Selamat Anda Berhasil Menambahkan Barang');
  	 location = 'tableTransaksi.php';
  </script>";
}
else
{
  echo "<script>alert('Tidak Berhasil');
  	 location = '';
  </script>";
}
?>