<main>

<!--php start-->









 <div class="container-fluid px-4">
    <h1 class="mt-4"> Manajemen Ruang</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    
    </ol>

    <div class="d-flex bg-dark text-white p-3"><span class="text-dark">s</span></div>






	<!--form tambah ruangan start-->
	<form method="post" action=" config/simpan.php">

	<h3><i class="bi bi-house-fill"></i>Tambah ruangan</h3>
	
	<!--end of title-->
		<div class="row">
			<div class="col-md-mt3">
				<input type="text" class="form-control" id="namaRuangan" placeholder="Nama ruangan" name="namaruangan">
			</div>

			<br>
			</br>

			<div class="col-md-mt3">
				<button type="submit" class="btn btn-warning" name="simpan">Simpan</button>
			</div>
		</div>
	</form>
	
	
	
	
	
		<!--input group edit ruang-->
	<br>
	</br>	
	
 
	<!--Start of edit ruangan form-->

	<form method ="post" action ="config/edit.php">
	
	<h3><i class="bi bi-pencil-square"></i>Edit nama ruang</h3>
	</br>
	<div class="row">
		<div class="col-md-mt3">
			<input type="number" class="form-control" name="idRuangan" id="exampleFormControlInput1" placeholder="ID Ruangan">
		</div>

		<br>
		</br>

		<div class="col-md-mt3">
			<input type="text" class="form-control" name ="namaRuangan" id="exampleFormControlInput1" placeholder="Nama baru ruangan">
		</div>
		
		<br>
		</br>

		<div class="col-md-mt3">
			<button type="submit" name ="update" class="btn btn-warning">Edit</button>
		</div>
		<br>
		</br>


		<br>
		</br>

	
	</div>
	</form>







	<!--form hapus ruang-->

	<form method ="post" action ="config/hapus.php">

		<h3><i class="bi bi-trash-fill"></i>Hapus ruang</h3>

		<div class="row">
			<div class="col-md mt-3">
				<input type="number" class="form-control" id="exampleFormControlInput1" name="idRuangan" placeholder="Masukan ID ruangan yang ingin dihapus">
			</div>
			
			<br>
			</br>

			<div class="col-md mt-3">

				<button type="submit"  class="btn btn-danger" name="hapus">soft delete</button>
				<button type="submit"  class="btn btn-danger" name="hapus2">Hard delete</button>
			
				<br>
			</br>
			<br>
			</br>

			</div>
		</div>

	</form>
		

	
	<?php
	include 'config/showtableruang.php'
	?>

	
	
	
	
	
</main>