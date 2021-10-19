<?php

include_once 'connect.php';



    $idRuangan =$_GET['idRuangan'];
    $query = "UPDATE truangan SET isDeleted= '1' WHERE idRuangan =$idRuangan";
    echo"
    <script>
          alert('Data berhasil di Hapus');
          document.location.href = '../index.php?page=addroom';
          </script>";
	mysqli_query($db, $query);
