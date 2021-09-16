<main>

<!--php start-->

<?php
$server 			="localhost";
$user 				="root";
$password 			="";
$database			="inventorymanagement";
	

    $db = mysqli_connect($server, $user  , $password, $database) or die(mysqli_error($db));
	

//query simpan ruang
if(isset($_POST['simpan'])) {
	$nama = $_POST['namaruangan'];
	
	
	$query = "INSERT INTO truangan VALUES
						( '', '$nama', ''  )
						";
	mysqli_query($db, $query);
}
	

//query hapus ruang
if(isset($_POST['hapus'])) {
	$id = $_POST ['idruangan'];
    $query = "UPDATE truangan SET isDeleted= '1' WHERE idRuangan =$id";
	
	
	
	mysqli_query($db, $query);
}
//query update/edit ruang

if(isset($_POST['update'])) {
	$id = $_POST ['idruang'];
	$namaruang =$_POST ['namaruanganbaru'];	
	echo $id;
	echo $namaruang;
	
	$query = "UPDATE truangan SET namaRuangan= '$namaruang' WHERE idRuangan =$id";
	mysqli_query($db, $query);
}

?>







 <div class="container-fluid px-4">
    <h1 class="mt-4"> Manajemen Ruang</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    
    </ol>

    <div class="d-flex bg-dark text-white p-3"><span class="text-dark">s</span></div>






	<!--form tag start-->
	<form method="post" action="">
	
	</br>

	
	
	
	<!--input group tambah ruang-->

	<h3><i class="bi bi-house-fill"></i>Tambah ruang</h3>
	
	<!--end of title-->
	<div class="row">
		<div class="col-md-mt3">
			<input type="text" class="form-control" id="namaRuangan" placeholder="Nama ruang" name="namaruangan">
		</div>
		
			<br>
			</br>

		<div class="col-md-mt3">
			<button type="submit" class="btn btn-outline-warning" name="simpan">Simpan</button>
		</div>
 
	
	
	
	
	
	
		<!--input group edit ruang-->
	<br>
	</br>
	<!--break-->
	
	<h3><i class="bi bi-pencil-square"></i>Edit nama ruang</h3>
	</br>
	<div class="row">
		<div class="col-md-mt3">
			<input type="number" class="form-control" name="idruang" id="exampleFormControlInput1" placeholder="ID Ruangan">
		</div>

		<br>
		</br>

		<div class="col-md-mt3">
			<input type="text" class="form-control" name ="namaruanganbaru" id="exampleFormControlInput1" placeholder="Nama baru ruangan">
		</div>
		
		<br>
		</br>

		<div class="col-md-mt3">
			<button type="submit" name ="update" class="btn btn-outline-warning">Edit</button>
		</div>
		<br>
		</br>
	
	</div>







	<!--input group hapus ruang-->
	<h3><i class="bi bi-trash-fill"></i>Hapus ruang</h3>

	<div class="row">
		<div class="col-md-mt3">
			<input type="number" class="form-control" id="exampleFormControlInput1" name ="idruangan" placeholder="Masukan ID ruang yang ingin dihapus">
		</div>
		
		<br>
		</br>

		<div class="col-md-mt3">
			<button type="submit"  class="btn btn-outline-danger" name="hapus">Hapus</button>
		</div>
	</div>
		



<!-- end of form-->
</form>


</main>