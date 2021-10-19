<?php 
	require_once 'connect.php';

	function addpeople ($data) {
		global $db;
		$nama = htmlspecialchars($data['nama']);
		$jabatan = htmlspecialchars($data['jabatan']);
		$nip = htmlspecialchars($data['nip']);

		$query = "INSERT INTO `tpdf` (`id`, `nama`, `jabatan`, `nip`, `used`) VALUES (NULL, '$nama', '$jabatan', '$nip', NULL) ";
		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
	}

	function updatepeople($data) {
		global $db;
		$nama1 = $data['nama1'];
		$nama2 = $data['nama2'];

		if ( $nama1 === $nama2 ) {
			echo "<div class='alert alert-danger mt-3 alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Nama tidak boleh sama!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        	return false;
		} else {
			if ( isset($_POST['first']) && isset($_POST['second']) && isset($_POST['used1']) && isset($_POST['used2']) ) {
				if ($_POST['used1'] == '1' && $_POST['used2'] == '2') {
					$first = $_POST['first'];
					$second = $_POST['second'];
					$query1 = "UPDATE tpdf SET used = '0' WHERE nama = '$first' ";
					$query2 = "UPDATE tpdf SET used = '0' WHERE nama = '$second' ";  
					mysqli_query($db, $query1);
					mysqli_query($db, $query2);
	        		
	        		// return mysqli_affected_rows($db);
				}
			}
		}

		$query1 = "UPDATE tpdf SET 
				used = '1'
                WHERE nama = '$nama1'
                ";

		$query2 = "UPDATE tpdf SET 
					used = '2'
                    WHERE nama = '$nama2'
                    ";
        mysqli_query($db, $query1);
		mysqli_query($db, $query2);
		
		return mysqli_affected_rows($db);
	}

 ?>