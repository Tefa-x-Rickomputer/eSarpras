<?php 
	include 'connect.php';

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

        // mencek apakah ada file poto yg di upload
        if ($_FILES['fotoProfil']['error'] === 4) {
            $query = "INSERT INTO `tuser` (`idUser`, `username`, `password`, `role`, `nik`, `nama`, `fotoProfil`, `gender`, `agama`, `telpon`, `email`, `tanggalLahir`, `alamat`, `status`, `isDeleted`) VALUES (NULL, '$username', '$password', '$role', '$nik', '$nama', 'person-fill.svg', '$gender', '$agama', '$telpon', '$email', '$tanggalLahir', '$alamat', '$status', 0)";
        }else{
            $fotoProfil = upload();
            $query = "INSERT INTO `tuser` (`idUser`, `username`, `password`, `role`, `nik`, `nama`, `fotoProfil`, `gender`, `agama`, `telpon`, `email`, `tanggalLahir`, `alamat`, `status`, `isDeleted`) VALUES (NULL, '$username', '$password', '$role', '$nik', '$nama', '$fotoProfil', '$gender', '$agama', '$telpon', '$email', '$tanggalLahir', '$alamat', '$status', 0)";
        }

            mysqli_query($db, $query);

        return mysqli_affected_rows($db);

	}

	function upload() {
		$namafile = $_FILES['fotoProfil']['name'];
		$sizeFile = $_FILES['fotoProfil']['size'];
		$tmpName = $_FILES['fotoProfil']['tmp_name'];

		// check yg diupload adalah gambar
		$fileformat = ['png', 'jpeg', 'jpg', 'jfif'];
        $namafileformat = explode('.', $namafile);
        $namafileformat = strtolower(end($namafileformat));
        if( !in_array($namafileformat, $fileformat) ) {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Harus berupa gambar!.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return false;
        }

        if( $sizeFile >= 1000000 ) {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>Gambar terlalu besar!.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
            return false;
        }
            

        $newfile = uniqid();
        $newfile .= '.';
        $newfile .= $namafileformat;

        move_uploaded_file($tmpName, "Assets/img/user/" . $newfile);

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
        $status = htmlspecialchars($data['status']);
        $gender = htmlspecialchars($data['gender']);
        $fotoProfilold = htmlspecialchars($data['fotoProfil']);

        // mencek apakah ada file poto yg di upload
        if ($_FILES['fotoProfil']['error'] == 4) {
            $fotoProfil = $fotoProfilold;
        }else{
            $fotoProfil = upload();
        }
        
        // cek jika user mengganti password
        if ($_POST['passlama']) {
            $currentpasshash = htmlspecialchars($data['currentpass']);
            $passlama = htmlspecialchars($data['passlama']);
            $passbaru1 = htmlspecialchars($data['passbaru1']);
            $passbaru2 = htmlspecialchars($data['passbaru2']);

            if (password_verify($_POST['passlama'], $_POST['currentpass'])) {
                if($_POST['passbaru1'] == '' && $_POST['passbaru2'] == '') {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Password yang baru tidak kosong!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    return false;
                } else {
                    if ($_POST['passbaru1'] === $_POST['passbaru2'] ) {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='bi bi-check-circle'></i><span class='ms-3'>Password Berhasil diubah!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                        $passbaru2 = password_hash($passbaru2, PASSWORD_DEFAULT);
                        $query = "UPDATE tuser SET  
                                    nik = '$nik', 
                                    nama = '$nama', 
                                    password = '$passbaru2', 
                                    fotoProfil = '$fotoProfil', 
                                    gender = '$gender', 
                                    agama = '$agama', 
                                    telpon = '$telpon', 
                                    email = '$email',
                                    status = '$status', 
                                    tanggalLahir = '$tanggalLahir', 
                                    alamat = '$alamat'
                                    WHERE idUser = $id
                                    ";

                        mysqli_query($db, $query);

                        return mysqli_affected_rows($db);
                    } else {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Password yang dimasukkan tidak sama!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                        return false;
                    }
                }    
            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Password yang lama salah!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                return false;
            }
        }

        $query = "UPDATE tuser SET  
        			nik = '$nik', 
        			nama = '$nama', 
        			fotoProfil = '$fotoProfil', 
        			gender = '$gender', 
        			agama = '$agama', 
        			telpon = '$telpon', 
        			email = '$email',
                    status = '$status', 
        			tanggalLahir = '$tanggalLahir', 
        			alamat = '$alamat'
        			WHERE idUser = $id
        			";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
	}

 ?>