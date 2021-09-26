<main>
<?php

include 'connect.php';


if(isset($_POST['edit'])) {
    $idRuangan=$_GET['idRuangan'];
	$namaRuangan=$_POST['namaRuangan'];
    $query = "UPDATE truangan SET namaRuangan= '$namaRuangan' WHERE idRuangan =$idRuangan";
	mysqli_query($db, $query);
	echo"
	<script>
          alert('Data berhasil di Simpan');
          document.location.href = '../index.php?page=addroom';
          </script>";
}?>

<form method ="post" action ="" class="row g-">
  <div class="col-auto">
   
  </div>
	<div class="col-auto">
		<label for="inputPassword2" class="visually-hidden">Password</label>
		<input type="text" class="form-control" id="inputPassword2" placeholder="" name ="namaRuangan">
	</div>
	<div class="col-auto">
		<button type="submit" name ="edit" class="btn btn-primary mb-3">Edit</button>
	</div>
</form>
</main>

