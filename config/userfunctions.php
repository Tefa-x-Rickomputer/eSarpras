<?php 
	$db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');

	function query($query) {
		global $db;
		$result = mysqli_query($db, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function adduser($data) {
		global $db;
		$username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $role = htmlspecialchars($data['role']);
        $nama = htmlspecialchars($data['nama']);
        $nik = htmlspecialchars($data['nik']);
        $tanggalLahir = htmlspecialchars($data['tanggalLahir']);
        $email = htmlspecialchars($data['email']);
        $telpon = htmlspecialchars($data['telpon']);
        $alamat = htmlspecialchars($data['alamat']);
        $status = htmlspecialchars($data['status']);
        $agama = htmlspecialchars($data['agama']);
        $gender = htmlspecialchars($data['gender']);

        if ( $_FILES['fotoProfil']['error'] === 4) {
        	$fotoProfil = '';
            $query = "INSERT INTO tuser VALUES
                    ('', '$username', '$password', '$role', '$nik', '$nama', '$fotoProfil', '$gender', '$agama', '$telpon', '$email', '$tanggalLahir', '$alamat', '$status', '')
                    ";

            mysqli_query($db, $query);
        }else {
        	$fotoProfil = upload();
            echo "$fotoProfil";

            // $query = "INSERT INTO tuser VALUES
            // 		('', '$username', '$password', '$role', '$nik', '$nama', '$fotoProfil', '$gender', '$agama', '$telpon', '$email', '$tanggalLahir', '$alamat', '$status', '')
            // 		";

            // mysqli_query($db, $query);
        }

        return mysqli_affected_rows($db);

	}

	function upload() {
		$namafile = $_FILES['fotoProfil']['name'];
		$sizeFile = $_FILES['fotoProfil']['size'];
        $check = $_FILES['fotoProfil']['error'];
		$tmpName = $_FILES['fotoProfil']['tmp_name'];

		// check yg diupload adalah gambar
		$fileformat = ['png', 'jpeg', 'jpg', 'jfif'];
        $namafileformat = explode('.', $namafile);
        $namafileformat = strtolower(end($namafileformat));
        if( !in_array($namafileformat, $fileformat) ) {
            echo "<script>
                    alert('Harus berupa gambar!');
                </script>";
            return false;
        }
        

        $newfile = uniqid();
        $newfile .= '.';
        $newfile .= $namafileformat;

        return $newfile;
	}

	function isHapus($id) {
		global $db;
		mysqli_query($db, "UPDATE tuser SET isDeleted = 1 WHERE idUser = $id");

		return mysqli_affected_rows($db);
	}

	function edit($data) {
		global $db;
		$id = $data['idUser'];
		$nama = htmlspecialchars($data['nama']);
        $nik = htmlspecialchars($data['nik']);
        $tanggalLahir = htmlspecialchars($data['tanggalLahir']);
        $email = htmlspecialchars($data['email']);
        $telpon = htmlspecialchars($data['telpon']);
        $alamat = htmlspecialchars($data['alamat']);
        $agama = htmlspecialchars($data['agama']);
        $gender = htmlspecialchars($data['gender']);
        $fotoProfil = htmlspecialchars($data['fotoProfil']);

        $query = "UPDATE tuser SET  
        			nik = '$nik', 
        			nama = '$nama', 
        			fotoProfil = '$fotoProfil', 
        			gender = '$gender', 
        			agama = '$agama', 
        			telpon = '$telpon', 
        			email = '$email', 
        			tanggalLahir = '$tanggalLahir', 
        			alamat = '$alamat'
        			WHERE idUser = $id
        			";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
	}

 ?>