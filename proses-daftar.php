<?php
   require_once("koneksi.php");
   $nama = $_POST['nama'];
   $pass = $_POST['pass'];
   $sql = "SELECT * FROM login WHERE nama = '$nama'";
   $query = $con->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$nama || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO login VALUES ('$nama', '$pass')";
       $simpan = $con->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login1.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>