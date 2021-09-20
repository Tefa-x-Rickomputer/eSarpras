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
	

//query hapus ruang (soft delete)
if(isset($_POST['hapus'])) {
	$id = $_POST ['idruangan'];
    $query = "UPDATE truangan SET isDeleted= '1' WHERE idRuangan =$id";
	
	
	
	mysqli_query($db, $query);
}

// hard delete
if(isset($_POST['hapus2'])) {
	$id = $_POST ['idruangan'];
    $query = "DELETE FROM truangan WHERE idRuangan =$id";
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



//Query show table

$tabel = ("SELECT idRuangan,namaRuangan FROM truangan");


	mysqli_query($db, $tabel);
	
	

?>