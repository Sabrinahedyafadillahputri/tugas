<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama 		= $_POST['nama'];
	$umur   	= $_POST['umur'];
	$jenkel     = $_POST['jenkel'];
	$alamat     = $_POST['alamat'];
	$gejala 	= $_POST['gejala'];
    $tgl_periksa   = $_POST['tgl_periksa'];
    //var_dump($id); die();  
    
	$sql ="UPDATE odp SET
	                           nama='$nama',
	                           umur='$umur', 
	                           jenkel='$jenkel',
	                           alamat='$alamat', 
	                           gejala='$gejala', 
	                           tgl_periksa='$tgl_periksa' 
	                           WHERE id= $id ";
    $odp = mysqli_query($con,$sql);
	$count = mysqli_affected_rows($con);

	if($odp){
	 header("location: home.php");
		echo "
		<script>
		    alert('Data berhasil Diubah!')
		    document.location.href = 'home.php';
		 </script>
		 ";
    }
   else{
       header("location: edit.php");
   }
}
else{    header ("location: edit.php");		
}
 include '../aset/footer.php';
 ?>