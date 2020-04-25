<?php

include '../koneksi.php';

include '../aset/header.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';


$query =  "SELECT * FROM pdp WHERE id= $id ";
$res = mysqli_query($con, $query);
$pdp = mysqli_fetch_assoc($res);

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
                        <td><?= $pdp['id']?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?= $pdp['nama'] ?></td> 
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><?= $pdp['umur']?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $pdp['alamat']?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?= $pdp['jenkel']?></td>
                    </tr>
                    <tr>
                        <td>Penyakit</td>
                        <td><?= $pdp['penyakit']?></td>
                    </tr>
                    <tr>
                        <td>Tgl Periksa</td>
                        <td><?= $pdp['tgl_periksa']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id=<?= $pdp["id"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id=<?= $pdp["id"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
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