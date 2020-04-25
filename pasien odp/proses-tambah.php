<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur= $_POST['umur'];
    $jenkel = $_POST['jenkel'];
    $alamat = $_POST['alamat'];
    $gejala = $_POST['gejala'];
    $tgl_periksa = $_POST['tgl_periksa'];

    $query = mysqli_query($con, "INSERT INTO odp (nama, umur, jenkel, alamat, gejala, tgl_periksa) VALUES 
                         ('$nama', '$umur', '$jenkel', '$alamat','$gejala', '$tgl_periksa')");
    // $res = mysqli_query($koneksi, $query);
    $count = mysqli_affected_rows($kon);
    // var_dump($query);
    // var_dump($_POST);
    if($query > 0){
        header("location: home.php");
    }
    else{
        header("location: tambah.php");
    }
}
else{
    header ("location: tambah.php");
}
?>