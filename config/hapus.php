
<?php

include 'connect.php';


if(isset($_POST['hapus'])) {
    $idRuangan =$_POST['idRuangan'];
    $query = "UPDATE truangan SET isDeleted= '1' WHERE idRuangan =$idRuangan";
    echo"
    <script>
          alert('Data berhasil di Hapus');
          document.location.href = '../index.php?page=addroom';
          </script>";
	mysqli_query($db, $query);
}

// hard delete
if(isset($_POST['hapus2'])) {
	$idRuangan =$_POST['idRuangan'];
    $query = "DELETE FROM truangan WHERE idRuangan =$idRuangan";
    echo"
    <script>
          alert('Data berhasil di Hapus');
          document.location.href = '../index.php?page=addroom';
          </script>";
	mysqli_query($db, $query);
}
?>