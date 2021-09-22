<?php
     include 'connect.php';
	// $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');

	function addbarang($data) {
		global $db;
		$namaBarang = $data['namaBarang'];
     	 $merkBarang = $data['merkBarang'];
     	 $tipeBarang = $data['tipeBarang'];
     	 $nomorRegister = $data['nomorRegister'];
     	 $hargaSatuan = $data['hargaSatuan'];
     	 $tahunPembelian = $data['tahunPembelian'];
     	 $sumberDana = $data['sumberDana'];
     	 $kondisiBarang = $data['kondisiBarang'];
     	 $linkRuangan = $data['linkRuangan'];
     	 $fotoBarang = $data['fotoBarang'];

     	 $query = "INSERT INTO tbarang VALUES
     	 ('', '$namaBarang', '$fotoBarang', '$merkBarang', '$tipeBarang', '$nomorRegister', '$hargaSatuan', '$tahunPembelian', '$sumberDana', '$kondisiBarang', '$linkRuangan','')
     	 ";

     	 mysqli_query($db, $query);

     	 return mysqli_affected_rows($db);

     }
     function edit($data) {
           $namaBarang =htmlspecialchars($data['namaBarang']);
           $merkBarang =htmlspecialchars($data['merkBarang']);
           $tipeBarang =htmlspecialchars ($data['tipeBarang']);
           $nomorRegister =htmlspecialchars ($data['nomorRegister']);
           $hargaSatuan =htmlspecialchars ($data['hargaSatuan']);
           $tahunPembelian =htmlspecialchars ($data['tahunPembelian']);
           $sumberDana =htmlspecialchars ($data['sumberDana']);
           $kondisiBarang =htmlspecialchars ($data['kondisiBarang']);
           $linkRuangan =htmlspecialchars ($data['linkRuangan']);
           $fotoBarang =htmlspecialchars ($data['fotoBarang']);

           $query = "INSERT INTO tbarang VALUES
           ('', '$namaBarang', '$fotoBarang', '$merkBarang', '$tipeBarang', '$nomorRegister', '$hargaSatuan', '$tahunPembelian', '$sumberDana', '$kondisiBarang', '$linkRuangan','')
           ";
     }

     function hapus($id) {
          global $db;
          mysqli_query($db, "UPDATE tbarang SET isDeleted = 1 WHERE idAset = $id");
          return mysqli_affected_rows($db);
     }
 ?>