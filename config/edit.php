<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Icon Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Inventory Barang</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Assets/css/indexstyles.css" rel="stylesheet" />
        <link rel="stylesheet" href="Assets/css/index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Data Table -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/r-2.2.9/datatables.min.css"/>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="Assets/css/dashboard.css">
   		 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

	</head>
	<body>
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
    
	<div class="position-absolute top-50 start-50 translate-middle">
		<div class="container overflow-hidden">
			<div class="row gx-5">
				<div class="col">
					<div class="p-3 border bg-light">
						<div class="input-group">
							<span class="input-group-text">Nama Ruangan Baru</span>
							<input type="text" aria-label="Last name" name ="namaRuangan" class="form-control">
						</div> 	 
					</div>
				</div>
			</div>
			<div class="col">
				<div class="p-3 border bg-light">
					<div class=" mt-3">
						<button type="submit" name ="edit" class="btn btn-primary mb-3">Simpan Perubahan</button>
					</div>
				</div>
			</div>
		</div>
	</div>



</form>
</body>
</html>
