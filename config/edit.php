<?php

include 'connect.php';


if(isset($_POST['update'])) {
	$id = $_POST ['idRuangan'];
	$namaruang =$_POST ['namaRuangan'];	
	$query = "UPDATE truangan SET namaRuangan= '$namaruang' WHERE idRuangan =$id";

	echo"
	<script>
          alert('Data berhasil di Edit');
          document.location.href = '../index.php?page=addroom';
          </script>";
	mysqli_query($db, $query);
}
	



?>