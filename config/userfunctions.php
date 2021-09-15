<?php 
	require 'connect.php';

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
        $fotoProfil = htmlspecialchars($data['fotoProfil']);

        $query = "INSERT INTO tuser VALUES
        		('', '$username', '$password', '$role', '$nik', '$nama', '$fotoProfil', '$gender', '$agama', '$telpon', '$email', '$tanggalLahir', '$alamat', '$status', '')
        		";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);

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