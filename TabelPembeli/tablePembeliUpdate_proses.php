<?php
if (isset($_POST['simpan'])) {


    include('../config.php');


    $id_pembeli = $_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $jk = $_POST['jk'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $update = "UPDATE pembeli SET nama_pembeli='$nama_pembeli', jk='$jk', no_telp='$no_telp', alamat='$alamat' WHERE id_pembeli='$id_pembeli'";
    $a=mysqli_query($mysql,$update);
	if ($a) { 
        echo "<script>alert('Selamat Anda Berhasil Edit Barang');
        location = 'tablePembeli.php';
   </script>";
    } else {
        echo "<script>alert('Tidak Berhasil');
        location = '';
   </script>";
    }
}
