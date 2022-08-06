<?php
if (isset($_POST['simpan'])) {


    include('../config.php');


    $id_transaksi = $_POST['id_transaksi'];
    $id_pembeli = $_POST['id_pembeli'];
    $id_barang = $_POST['id_barang'];
    $tanggal = $_POST['tanggal'];

    $update = "UPDATE transaksi SET id_pembeli='$id_pembeli', id_barang='$id_barang', tanggal='$tanggal' WHERE id_transaksi='$id_transaksi'";
    $a=mysqli_query($mysql,$update);
	if ($a) { 
        echo "<script>alert('Selamat Anda Berhasil Edit Barang');
        location = 'tableTransaksi.php';
   </script>";
    } else {
        echo "<script>alert('Tidak Berhasil');
        location = '';
   </script>";
    }
}
