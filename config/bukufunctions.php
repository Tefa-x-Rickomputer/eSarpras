<?php
     // require 'connect.php';
     $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');

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
     	 

       // upload gambar
       $fotoBuku = upload();
       if ( !$fotoBuku) {
        return false;
       }

     	 $query = "INSERT INTO tbuku VALUES
     	 ('', '$judulBuku', '$fotoBuku', '$nomorBuku', '$pengarang', '$penerbit', '$tahunTerbit', '$jumlahHalaman', '$nomorRegister', '$tahunPembelian', '$hargaBuku', '$sumberDana', '$kondisiBuku', '$linkRuangan', '')
     	 ";

     	 mysqli_query($db, $query);

     	 return mysqli_affected_rows($db);
	}


    // function upload foto
    function upload(){
      $namaFile = $_FILES['fotoBuku']['name'];
      $ukuranFile = $_FILES['fotoBuku']['size'];
      $error = $_FILES['fotoBuku']['error'];
      $tmpName = $_FILES['fotoBuku']['tmp_name'];

      // cek apakah tidak ada foto yang diupload
     if ( $error === 4 ){
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
               </script> ";
        return false;
     }

     // cek apakah yang diupload adalah foto
     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
     $ekstensiGambar = explode('.', $namaFile);
     $ekstensiGambar = strtolower(end($ekstensiGambarValid));
     if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan foto!');
               </script> ";
        return false;
     }

     // cek jika ukurannya terlalu besar
     if( $ukuranFile > 1000000 ) {
      echo "<script>
                alert('ukuran foto terlalu besar!');
               </script> ";
        return false;
     }

     // lolos pengecekan, foto siap diupload
     // generate nama gambar baru 
     $namaFileBaru = uniqid();
     $namaFileBaru .= '.';
     $namaFileBaru .= $ekstensiGambar;

     move_uploaded_file($tmpName, 'Assets/img/buku/' . $namaFileBaru  );

     return $namaFileBaru;
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