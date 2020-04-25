<?php
$con = mysqli_connect("localhost","root","","toko");

if (mysqli_connect_error()) {
	echo "koneksi database gagal :" .mysqli_connect_error();
}
?>