<?php 
include '../koneksi.php';
include '../aset/header.php';
$id = isset($_GET['id']) ? $_GET['id'] :'';
$query= "SELECT * FROM odp WHERE id='$id' ";
$res=mysqli_query($con,$query);
$odp=mysqli_fetch_array($res);
 ?>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 				<div class="card" style="width: 100%">
 					<div class="card header" style="width: 100%">
 						<h2 class="card-title"><i class=""></i> Edit Data ODP</h2>
 					</div>
 					<div class="card-body">
 						<form action="proses-edit.php" method="post">
 							<table class="table">
 								<input type="hidden" name="id" value="<?= $odp['id']; ?>">
 								<tr>
 									<td>Nama</td>
 									<td><input style="width: 100%" type="text" name="nama" value="<?php echo $odp['nama']; ?>" required></td>
 								</tr>
 								<tr>
 									<td>Umur</td>
 									<td><input style="width: 100%" type="text" name="umur" value="<?php echo $odp["umur"]; ?>" required></td>
 								</tr>
 								<tr>
 									<td>Jenis Kelamin</td>
 									<td><input style="width: 100%" type="text" name="jenkel" value="<?php echo $odp["jenkel"]; ?>" required></td>
 								</tr>
 								<tr>
 									<td>Alamat</td>
 									<td><input style="width: 100%" type="text" name="alamat" value="<?php echo $odp['alamat']?>" required></td>
 								</tr>
 								<tr>
 									<td>Gejala</td>
 									<td><input style="width: 100%; height: 100%;" value="<?php echo $odp['gejala']; ?>" type="text" name="gejala" required></td>
 								</tr>
 								<tr>
 									<td>Tgl Periksa</td>
 									<td><input style="width: 100%" type="date" name="tgl_periksa" value="<?= $odp['tgl_periksa']; ?>" required></td>
 								</tr>
 								<tr>
 									<th></th>
 									<th><button style="width: 100%; height: 70%" type="submit" value="simpan" class="btn btn-primary" name="simpan">EDIT</button></th>
 								</tr>
 							</table>
 						</form>
 					</div>
 				</div>
 		</div>
 	</div>
 </div>
 
 