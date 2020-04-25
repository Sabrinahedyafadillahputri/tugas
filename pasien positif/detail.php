<?php

include '../koneksi.php';

include '../aset/header.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';


$query =  "SELECT * FROM positif WHERE id= $id ";
$res = mysqli_query($con, $query);
$pos = mysqli_fetch_assoc($res);

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
                        <td><?= $pos['id']?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?= $pos['nama'] ?></td> 
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><?= $pos['umur']?></td>
                    </tr>
                    <tr>
                        <td>jenkel</td>
                        <td><?= $pos['jenkel']?></td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td><?= $pos['alamat']?></td>
                    </tr>
                    <tr>
                        <td>karantina</td>
                        <td><?= $pos['karantina']?></td>
                    </tr>
                    <tr>
                        <td>Tgl Periksa</td>
                        <td><?= $pos['tgl_periksa']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id=<?= $pos["id"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id=<?= $pos["id"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
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