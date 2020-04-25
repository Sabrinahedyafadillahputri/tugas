<?php
   session_start();
   if(isset($_SESSION['nama'])) {
   header('location:login1.php'); }
?>
<html>
<head>
<title>Form Pendaftaran</title>
<style type="text/css">
  body
  {
    background-image: url('covidjpg.jpg');
  }
</style>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <center><h1></h1>
    <?php
    if (isset($_COOKIE["message"])) {
         echo $_COOKIE["message"];
    }
    ?>
    <div class="kotak_login">
      <p class="tulisan_login">Register</p>
  <form action="proses-daftar.php" method="post">
  <label>Username</label>
  <input type="text" name="nama" class="form_login" placeholder="username..">

  <label>Password</label>
  <input type="password" name="pass" class="form_login" placeholder="password..">

  <input value="Daftar"  class="tombol_login"  type="submit"> 
  <input value="Batal" class="tombol_batal" type="reset">
  
  <tr><td>Sudah Punya akun ? <a href="login1.php"><b>Login</b></a></td></tr>
  </form>
</div>
</center>
</body>
</html>