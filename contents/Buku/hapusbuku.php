<?php 	
		require 'config/bukufunctions.php';
		$id = $_GET['id'];

		if (hapus($id) > 0) {
			echo "<script>
					alery('data berhasil di hapus');
					document.location.href = 'index.php?page=DaftarBuku';
				 </script>";
		} else {
			"<script>
					alery('data gagal dihapus');
					document.location.href = 'index.php?page=DaftarBuku';
				 </script>";
		}

 ?>