<?php 
include '../koneksi.php';
$id = isset($_GET['id']) ? $_GET['id'] : "";
$query=mysqli_query($con,"DELETE FROM positif WHERE id='$id'");
if($query>0){
    echo "
          <script>
            alert('Data Berhasil Dihapus');
            document.location.href='home.php';
           </script>
         ";
     }
?>