<?php
include 'config.php';
session_start();

if (isset($_SESSION['userID'])) {
?>
	<script>
		alert('Welcome <?php echo $_SESSION['username'] ?>');
	</script>
	<?php
	session_destroy();
	unset($_SESSION['userID']);
	header('location:index.php');
}

if (isset($_POST['log'])) {

	$username = $_POST['username'];
	$password =  $_POST['password'];

	$sql = "SELECT * FROM login where username = '$username' and password = '$password'";
	$result = $mysql->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$_SESSION['userID'] = $row['userID'];
			$_SESSION['username'] = $row['username'];
		}
	?>
		<script>
			alert('Welcome <?php echo $_SESSION['username'] ?>');
		</script>
		<script>
			window.location = 'home.php';
		</script>
<?php


	} else {
		echo "<center><p style=color:red;>Invalid username or password</p></center>";
		echo "<script>window.location='home.php';</script>";
	}
	$mysql->close();
}
?>