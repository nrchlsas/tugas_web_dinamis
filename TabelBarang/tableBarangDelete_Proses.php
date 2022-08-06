<?php

	
	include('../config.php');
	
	
	$id_barang = $_GET['id_barang'];

		
		
		$del = "DELETE FROM pembeli WHERE id_barang='$id_barang'";
        $a=mysqli_query($mysql,$del);
        if ($a) { 
			
            echo "<script>alert('Selamat Anda Berhasil Delete Barang');
            location = 'tableBarang.php';
       </script>";
        } else {
            echo "<script>alert('Tidak Berhasil');
            location = '';
       </script>";
        }
