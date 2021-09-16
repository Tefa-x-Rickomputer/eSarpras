<?php 
 require 'config/barangfunctions.php';
 $id = $_GET["id"];

if (hapus($id) > 0 ) {
	echo"
	<script>
          alert('Data berhasil di Hapus');
          document.location.href = 'index.php?page=DaftarBarang';
          </script>";
} else {
	echo"<script>
          alert('Data gagal dihapus');
          document.location.href = 'index.php?page=DaftarBarang';
          </script>";
}

 ?>
