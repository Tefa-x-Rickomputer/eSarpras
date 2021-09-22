
<?php

include 'connect.php';


if(isset($_POST['simpan'])) {
	$nama = $_POST['namaruangan'];
	
	
	$query = "INSERT INTO truangan VALUES
						( '', '$nama', ''  )
						";
	echo"
	<script>
          alert('Data berhasil di Simpan');
          document.location.href = '../index.php?page=addroom';
          </script>";
	mysqli_query($db, $query);

}

?>