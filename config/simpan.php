
<?php

include 'connect.php';


if(isset($_POST['simpan'])) {
	$namaRuangan=$_POST['namaRuangan'];
	
	
	$query = "INSERT INTO truangan VALUES
						( '', '$namaRuangan', ''  )
						";
	echo"
	<script>
          alert('Data berhasil di Simpan');
          document.location.href = '../index.php?page=addroom';
          </script>";
	mysqli_query($db, $query);

}

?>