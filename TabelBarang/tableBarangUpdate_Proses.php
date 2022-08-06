<?php
if (isset($_POST['simpan'])) {


    include('../config.php');


    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $update = "UPDATE barang SET nama_barang='$nama_barang', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'";
    $a=mysqli_query($mysql,$update);
	if ($a) { 
        echo "<script>alert('Selamat Anda Berhasil Edit Barang');
        location = 'tableBarang.php';
   </script>";
    } else {
        echo "<script>alert('Tidak Berhasil');
        location = '';
   </script>";
    }
}
