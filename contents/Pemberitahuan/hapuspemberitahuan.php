<?php 
    
    outAdminGuest();
	require 'config/pemberitahuanfunctions.php';
	$id = $_GET['id'];

	if ( deletePemberitahuan($id) > 0 ) {
		echo "<script>
                    alert('data berhasil di hapus');
                    document.location.href = 'index.php?page=DaftarPemberitahuan'; 
                </script>";
    } else {
        echo "<script>
                alert('data berhasil di hapus');
                document.location.href = 'index.php?page=DaftarPemberitahuan'; 
            </script>";
    }

 ?>