<?php

     require 'connect.php';
     
// function tambah buku
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
           $fotoLama =htmlspecialchars($data['fotoLama']);

           // cek apakah user menambahkan foto baru atau tidak
           if($_FILES['fotoBuku']['error'] === 4 ) {
              $fotoBuku = $fotoLama;
           } else {
              $fotoBuku = upload();
           }

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