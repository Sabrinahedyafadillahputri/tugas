<?php
session_start(); // Start session nya

include "koneksi.php"; // Load file koneksi.php

$nama = mysqli_real_escape_string($con, $_POST['nama']); // Ambil value username yang dikirim dari form
$pass = mysqli_real_escape_string($con, $_POST['pass']); // Ambil value password yang dikirim dari form

// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
$sql = mysqli_query($con, "SELECT * FROM login WHERE nama='".$nama."' AND pass='".$pass."'");
$data = mysqli_fetch_array($sql); // Ambil datanya dari hasil query tadi

// Cek apakah variabel $data ada datanya atau tidak
if( ! empty($data)){ // Jika tidak sama dengan empty (kosong)
	$_SESSION['nama'] = $data['nama']; // Set session untuk username (simpan username di session)
	echo "selamat datang". $_SESSION['nama'];
	
	setcookie("message","delete",time()-1); // Kita delete cookie message
	
	header("location: home.php"); // Kita redirect ke halaman welcome.php
}else{ // Jika $data nya kosong
	// Buat sebuah cookie untuk menampung data pesan kesalahan
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	
	header("location: login1.php"); // Redirect kembali ke halaman index.php
}

?>