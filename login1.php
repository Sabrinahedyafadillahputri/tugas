<?php
session_start();

if (isset($_SESSION['nama'])) {
	header("location: login1.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>form login</title>

	<style type="text/css">
		body
		{
			background-image: url('gambar.jpg');
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h1></h1>
		<?php
		// Cek apakah terdapat cookie dengan nama message
		if(isset($_COOKIE["message"])){ // Jika ada
			echo $_COOKIE["message"]; // Tampilkan pesannya
		}
		?>
	<div class="kotak_login">
		<p class="tulisan_login">Login</p>

		<form method="post" action="cek_login.php">
			<label>Username</label>
			<input type="text" name="nama" class="form_login" placeholder="username..">

			<label>Password</label>
			<input type="password" name="pass" class="form_login" placeholder="password..">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>,
				<a class="link" href="daftar.php"> <b> Daftar? </b></a>
			</center>
		</form>
	</div>

</body>
</html>