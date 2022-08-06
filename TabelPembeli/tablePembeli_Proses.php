<?php
include '../config.php';
 
$id_pembeli=$_POST['id_pembeli'];  
$nama_pembeli=$_POST['nama_pembeli'];
$jk = $_POST['jk'];
$no_telp=$_POST['no_telp'];
$alamat=$_POST['alamat'];
$query="INSERT INTO pembeli (id_pembeli,nama_pembeli,jk,no_telp,alamat) values('$id_pembeli','$nama_pembeli','$jk','$no_telp','$alamat')";
$a=mysqli_query($mysql,$query);
	if ($a) {
  echo "<script>alert('Selamat Anda Berhasil Menambahkan Barang');
  	 location = 'tablePembeli.php';
  </script>";
}
else
{
  echo "<script>alert('Tidak Berhasil');
  	 location = '';
  </script>";
}
?>