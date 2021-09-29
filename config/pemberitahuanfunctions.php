<?php 
	include 'connect.php';
    // require 'sessionmanager.php';
    
	$notices = mysqli_query($db, "SELECT * FROM tpemberitahuan WHERE isDeleted = 0");
    $pemberitahuan = mysqli_fetch_assoc($notices);

    $query = mysqli_query($db, "SELECT * FROM tuser WHERE iduser = '$pemberitahuan[linkUser]'"); 
    $pembuat = mysqli_fetch_assoc($query);

    function query($query) {
		global $db;
		$result = mysqli_query($db, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function addPemberitahuan($data) {
		global $db;
		global $userSession;
        $linkUser = $userSession["idUser"];
        $isiPemberitahuan = htmlspecialchars($data['isiPemberitahuan']);

        $query = "INSERT INTO `tpemberitahuan` (`idPemberitahuan`, `linkUser`, `isiPemberitahuan`, `waktuPemberitahuan`, `isDeleted`) VALUES ('', '$linkUser', '$isiPemberitahuan', now(), '') ";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);

	}

	function deletePemberitahuan($id) {
		global $db;
		mysqli_query($db, "UPDATE tpemberitahuan SET isDeleted = 1 WHERE idPemberitahuan = $id");

		return mysqli_affected_rows($db);
	}

	function editPemberitahuan($data) {
		global $db;
		$id = $data['idPemberitahuan'];
        $isiPemberitahuan = htmlspecialchars($data['isiPemberitahuan']);
        $waktuPemberitahuan = htmlspecialchars($data['waktuPemberitahuan']);

        $query = "UPDATE tpemberitahuan SET  
                    isiPemberitahuan = '$isiPemberitahuan',
                    waktuPemberitahuan = '$waktuPemberitahuan'
        			WHERE idPemberitahuan = $id
        			";

        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
	}

 ?>