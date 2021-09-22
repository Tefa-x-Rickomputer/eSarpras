<?php

  require 'connect.php';

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
      
      $fotoBarang = upload();
      if ( !$fotoBarang) {
        return false;
      }

       $query = "INSERT INTO tbarang VALUES
       ('', '$namaBarang', '$fotoBarang', '$merkBarang', '$tipeBarang', '$nomorRegister', '$hargaSatuan', '$tahunPembelian', '$sumberDana', '$kondisiBarang', '$linkRuangan','')
       ";

       mysqli_query($db, $query);

       return mysqli_affected_rows($db);

     }
      // function upload foto
    function upload(){
      $namaFile = $_FILES['fotoBarang']['name'];
      $ukuranFile = $_FILES['fotoBarang']['size'];
      $error = $_FILES['fotoBarang']['error'];
      $tmpName = $_FILES['fotoBarang']['tmp_name'];

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

     move_uploaded_file($tmpName, 'Assets/img/aset/' . $namaFileBaru  );

     return $namaFileBaru;
    }

     function edit($data) {
               global $db;
           $idAset =htmlspecialchars($data['idAset']);    
           $namaBarang =htmlspecialchars($data['namaBarang']);
           $merkBarang =htmlspecialchars($data['merkBarang']);
           $tipeBarang =htmlspecialchars ($data['tipeBarang']);
           $nomorRegister =htmlspecialchars ($data['nomorRegister']);
           $hargaSatuan =htmlspecialchars ($data['hargaSatuan']);
           $tahunPembelian =htmlspecialchars ($data['tahunPembelian']);
           $sumberDana =htmlspecialchars ($data['sumberDana']);
           $kondisiBarang =htmlspecialchars ($data['kondisiBarang']);
           $linkRuangan =htmlspecialchars ($data['linkRuangan']);
           $fotoLama =htmlspecialchars ($data['fotoLama']);

            // cek apakah user menambahkan foto baru atau tidak
           if($_FILES['fotoBarang']['error'] === 4 ) {
              $fotoBarang = $fotoLama;
           } else {
              $fotoBarang = upload();
           }

           $query = "UPDATE tbarang SET
                                   namaBarang = '$namaBarang',
                                   merkBarang = '$merkBarang',
                                   tipeBarang = '$tipeBarang',
                                   nomorRegister = '$nomorRegister',
                                   hargaSatuan = '$hargaSatuan',
                                   tahunPembelian = '$tahunPembelian',
                                   sumberDana = '$sumberDana',
                                   kondisiBarang = '$kondisiBarang',
                                   linkRuangan = '$linkRuangan',
                                   fotoBarang = '$fotoBarang'
                                   where idAset = $idAset 
                                   ";
          mysqli_query($db, $query);
          
          return mysqli_affected_rows($db);                              
     }

     function hapus($id) {
          global $db;
          mysqli_query($db, "UPDATE tbarang SET isDeleted = 1 WHERE idAset = $id");
          return mysqli_affected_rows($db);
     }
 ?>