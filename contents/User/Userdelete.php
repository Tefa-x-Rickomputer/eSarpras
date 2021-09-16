<?php 

	require 'config/userfunctions.php';
	$id = $_GET['id'];

	if ( isHapus($id) > 0 ) {
		echo "<script>
                    alert('data berhasil di hapus');
                    document.location.href = 'index.php?page=Userlist'; 
                </script>";
    } else {
        echo "<script>
                alert('data berhasil di hapus');
                document.location.href = 'index.php?page=Userlist'; 
            </script>";
    }

 ?>