<?php

	
	include('../config.php');
	
	
	// $id_pembeli = $_GET['id_pembeli'];

		
		
		$del = "DELETE * FROM pembeli";
        $a=mysqli_query($mysql,$del);
        if ($a) { 
			
            echo "<script>alert('Selamat Anda Berhasil Registrasi');
            location = 'tablePembeli.php';
       </script>";
        } else {
            echo "<script>alert('Tidak Berhasil');
            location = '';
       </script>";
        }
