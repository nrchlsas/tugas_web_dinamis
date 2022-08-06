<?php

	
	include('../config.php');
	
	
	$id_transaksi = $_GET['id_transaksi'];

		
		
		$del = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
        $a=mysqli_query($mysql,$del);
        if ($a) { 
			
            echo "<script>alert('Selamat Anda Berhasil Delete Barang');
            location = 'tableTransaksi.php';
       </script>";
        } else {
            echo "<script>alert('Tidak Berhasil');
            location = '';
       </script>";
        }
