<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama        = $_POST['nama'];
    $umur        = $_POST['umur'];
    $alamat      = $_POST['alamat'];
    $jenkel      = $_POST['jenkel'];
    $penyakit    = $_POST['penyakit'];
    $gejala      = $_POST['gejala'];
    $tgl_periksa = $_POST['tgl_periksa'];

    $query = mysqli_query($con, "INSERT INTO pdp (nama, umur, alamat, jenkel, penyakit, gejala, tgl_periksa) VALUES 
                         ('$nama', '$umur', '$alamat', '$jenkel','$penyakit', '$gejala', '$tgl_periksa')");
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