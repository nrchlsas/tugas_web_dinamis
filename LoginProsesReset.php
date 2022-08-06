<?php
include("config.php");
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$update = "UPDATE login SET password='$password', email='$email' WHERE username='$username'";
$a=mysqli_query($mysql,$update);
if ($a) { 
    echo "<script>alert('Selamat Anda Berhasil Edit Barang');
    location = 'index.php';
</script>";
} else {
    echo "<script>alert('id ga sesuai');
    location = 'index.php';
</script>";
}
?>