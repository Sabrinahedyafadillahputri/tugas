<?php

include '../koneksi.php';

include '../aset/header.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';


$query =  "SELECT * FROM odp WHERE id= $id ";
$res = mysqli_query($con, $query);
$odp = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card-body">

                <table class="table">
                

                       
                    <tr>
                        <td>ID</td>
                        <td><?= $odp['id']?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?= $odp['nama'] ?></td> 
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><?= $odp['umur']?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?= $odp['jenkel']?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $odp['alamat']?></td>
                    </tr>
                    <tr>
                        <td>Gejala</td>
                        <td><?= $odp['gejala']?></td>
                    </tr>
                    <tr>
                        <td>Tgl Periksa</td>
                        <td><?= $odp['tgl_periksa']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id=<?= $odp["id"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id=<?= $odp["id"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                     </tr>
                 

                </table>
            </div>
        </div>
</body>
</html>
<?php
include '../aset/footer.php';
?>