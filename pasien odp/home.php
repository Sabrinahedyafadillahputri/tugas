<?php
include '../koneksi.php';
$sql = "SELECT * FROM odp ";

$res = mysqli_query( $con, $sql);

$pinjam  = array();
while ($data = mysqli_fetch_assoc($res)) {
	$pinjam[]=$data;
}


include '../aset/header.php';
?>
<div class="container">
 <div class="row mt-4>;">
  <div class="col-md">
  </div>
 </div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class=""> </i> Data ODP</h2>
    </div>
    <div class="card-body">
    	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Gejala</th>
      <th scope="col">Tgl Periksa</th>

    </tr>
  </thead>
<?php
    $no = 1;
    foreach ($pinjam as $p) { ?>
      
      <tr>
      	<th scope= "row"><?=$no?></th>
      	<td><?=$p['nama'] ?></td>
        <td><?=$p['umur'] ?></td>
        <td><?=$p['jenkel'] ?></td>
        <td><?=$p['alamat'] ?></td>
        <td><?=$p['gejala'] ?></td>
        <td><?=$p['tgl_periksa'] ?></td>
      	
        <td>
            <a href="detail.php?id=<?php echo $p['id']; ?>" class="badge badge-success">Detail</a>
            <a href="edit.php?id=<?php echo $p['id']; ?>" class="badge badge-warning">Edit</a>
            <a href="hapus.php?id=<?php echo $p['id']; ?>" class="badge badge-danger">Hapus</a>
        	<!-- sementara dikosongkan -->

        </td>
      </tr>
    	<?php
    	$no++;
    }
    ?>
  </div>
</div>
</table>
<a href="tambah.php" class="badge badge-info">Tambah ODP</a>
<?php
include'../aset/footer.php';
?>
