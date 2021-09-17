<?php
<<<<<<< HEAD
     // require 'connect.php';
     $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');
=======
     require 'connect.php';
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a

     function query($query) {
          global $db;
          $result = mysqli_query($db, $query);
          $rows = [];
          while( $row = mysqli_fetch_assoc($result) ) {
               $rows[] = $row;
          }
          return $rows;
     }

	// $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');

	function addbuku($data) {
		global $db;
		 $judulBuku = htmlspecialchars($data['judulBuku']);
     	 $nomorBuku = htmlspecialchars($data['nomorBuku']);
     	 $pengarang = htmlspecialchars($data['pengarang']);
     	 $penerbit  = htmlspecialchars($data['penerbit']);
     	 $tahunTerbit = htmlspecialchars($data['tahunTerbit']);
     	 $jumlahHalaman = htmlspecialchars($data['jumlahHalaman']);
     	 $nomorRegister = htmlspecialchars($data['nomorRegister']);
     	 $tahunPembelian = htmlspecialchars($data['tahunPembelian']); 
     	 $hargaBuku =htmlspecialchars($data['hargaBuku']); 
     	 $sumberDana =htmlspecialchars($data['sumberDana']); 
     	 $kondisiBuku =htmlspecialchars($data['kondisiBuku']); 
     	 $linkRuangan =htmlspecialchars($data['linkRuangan']); 
     	 $fotoBuku =htmlspecialchars($data['fotoBuku']); 

     	 $query = "INSERT INTO tbuku VALUES
     	 ('', '$judulBuku', '$fotoBuku', '$nomorBuku', '$pengarang', '$penerbit', '$tahunTerbit', '$jumlahHalaman', '$nomorRegister', '$tahunPembelian', '$hargaBuku', '$sumberDana', '$kondisiBuku', '$linkRuangan', '')
     	 ";

     	 mysqli_query($db, $query);

     	 return mysqli_affected_rows($db);
	}

     function hapus($id) {
          global $db;
          mysqli_query($db, "UPDATE tbuku SET isDeleted = 1 WHERE idBuku = $id");

          return mysqli_affected_rows($db);
     }

     function edit($data) {
              global $db;
           $id =$data['idBuku'];
           $judulBuku =htmlspecialchars($data['judulBuku']);
           $nomorBuku =htmlspecialchars($data['nomorBuku']);
           $pengarang =htmlspecialchars($data['pengarang']);
           $penerbit  =htmlspecialchars($data['penerbit']);
           $tahunTerbit =htmlspecialchars($data['tahunTerbit']);
           $jumlahHalaman =htmlspecialchars($data['jumlahHalaman']);
           $nomorRegister =htmlspecialchars($data['nomorRegister']);
           $tahunPembelian =htmlspecialchars($data['tahunPembelian']); 
           $hargaBuku =htmlspecialchars($data['hargaBuku']); 
           $sumberDana =htmlspecialchars($data['sumberDana']); 
           $kondisiBuku =htmlspecialchars($data['kondisiBuku']); 
           $linkRuangan =htmlspecialchars($data['linkRuangan']); 
           $fotoBuku =htmlspecialchars($data['fotoBuku']); 

            $query = "UPDATE tbuku SET
                                   judulBuku   = '$judulBuku',
                                   nomorBuku   = '$nomorBuku',
                                   pengarang   = '$pengarang',
                                   penerbit    = '$penerbit',
                                   tahunTerbit = '$tahunTerbit',
                                   jumlahHalaman = '$jumlahHalaman',
                                   nomorRegister = '$nomorRegister',
                                   tahunPembelian = '$tahunPembelian',
                                   hargaBuku   = '$hargaBuku',
                                   sumberDana   = '$sumberDana',
                                   kondisiBuku   = '$kondisiBuku',
                                   linkRuangan   = '$linkRuangan',
                                   fotoBuku   = '$fotoBuku'
                                   WHERE idBuku = $id
                                   ";

           mysqli_query($db, $query);

           return mysqli_affected_rows($db);

     }

 ?>