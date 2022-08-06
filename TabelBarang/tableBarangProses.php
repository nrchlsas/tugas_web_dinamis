<?php
include '../config.php';
 
$id_barang=$_POST['$id_barang'];  
$nama_barang=$_POST['nama_barang'];
$harga = $_POST['harga'];
$stok=$_POST['stok'];
$query="INSERT INTO barang (id_barang,nama_barang,harga,stok) values('$id_barang','$nama_barang','$harga','$stok')";
$a=mysqli_query($mysql,$query);
	if ($a) {
  echo "<script>alert('Selamat Anda Berhasil Menambahkan Barang');
  	 location = 'tableBarang.php';
  </script>";
}
else
{
  echo "<script>alert('Tidak Berhasil');
  	 location = '';
  </script>";
}
?>