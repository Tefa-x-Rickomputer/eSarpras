<?php

include 'connect.php';


if(isset($_POST['update'])) {
	$id = $_POST ['idRuangan'];
	$namaruang =$_POST ['namaRuangan'];	


	
	$query = "UPDATE truangan SET namaRuangan= '$namaruang' WHERE idRuangan =$id";
	mysqli_query($db, $query);
}
	



?>