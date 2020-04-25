<?php
include '../aset/header.php';
include '../koneksi.php';

$query = mysqli_query($con,("SELECT * FROM positif"));
?>

<html>
<head>
<title>CovidChecksite</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h2>Tambah POSITIF</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses-tambah.php" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenkel">Jenis Kelamin</label>
                                <input type="text" name=jenkel class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="karantina">Karantina</label>
                                <br>
                                <textarea style="width:200px" name="karantina">
                                    
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="tgl_periksa">TGL periksa</label>
                                <input type="date" name="tgl_periksa" class="form-control">
                            </div>
                            <button type="submit" name="simpan"  class="btn btn-primary mr-auto">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include '../aset/footer.php';
?>