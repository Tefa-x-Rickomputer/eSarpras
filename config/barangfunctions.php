<?php

  require 'connect.php';

  function addbarang($data) {
    global $db;
    $namaBarang = $data['namaBarang'];
       $merkBarang = $data['merkBarang'];
       $tipeBarang = $data['tipeBarang'];
       $nomorRegister = $data['nomorRegister'];
       $hargaSatuan = $data['hargaSatuan'];
       $hargaSatuan = str_replace('.', '', $hargaSatuan);
       $tahunPembelian = $data['tahunPembelian'];
       $sumberDana = $data['sumberDana'];
       $kondisiBarang = $data['kondisiBarang'];
       $linkRuangan = $data['linkRuangan'];
      
      
      // mencek apakah ada file poto yg di upload
      if ($_FILES['fotoBarang']['error'] === 4) {
            $query = "INSERT INTO `tbarang` (`idAset`, `namaBarang`,`fotoBarang`, `merkBarang`, `tipeBarang`, `nomorRegister`, `hargaSatuan`, `tahunPembelian`, `sumberDana`, `kondisiBarang`, `linkRuangan`, `isDeleted`) VALUES (NULL, '$namaBarang', '', '$merkBarang', '$tipeBarang', '$nomorRegister', '$hargaSatuan', '$tahunPembelian', '$sumberDana', '$kondisiBarang', '$linkRuangan', 0)";
        }else{
             $fotoBarang = upload();
       $query = "INSERT INTO `tbarang` (`idAset`, `namaBarang`,`fotoBarang`, `merkBarang`, `tipeBarang`, `nomorRegister`, `hargaSatuan`, `tahunPembelian`, `sumberDana`, `kondisiBarang`, `linkRuangan`, `isDeleted`) VALUES (NULL, '$namaBarang', '$fotoBarang', '$merkBarang', '$tipeBarang', '$nomorRegister', '$hargaSatuan', '$tahunPembelian', '$sumberDana', '$kondisiBarang', '$linkRuangan', 0)";
     }


       mysqli_query($db, $query);

       return mysqli_affected_rows($db);

     }

    function compressImage($source, $quality) { 
        // mendapatkan info image
        $imgInfo = getimagesize($source); 
        $mime = $imgInfo['mime'];
        // membuat image baru
        switch($mime){ 
        // proses kode memilih tipe tipe image 
            case 'image/jpeg': 
                $image = imagecreatefromjpeg($source); 
                break; 
            case 'image/png': 
                $image = imagecreatefrompng($source); 
                break; 
            case 'image/gif': 
                $image = imagecreatefromgif($source); 
                break; 
            default: 
                $image = imagecreatefromjpeg($source); 
        }
        $namafile = $_FILES['fotoBarang']['name'];

        $fileformat = ['png', 'jpeg', 'jpg', 'jfif', 'gif'];
        $namafileformat = explode('.', $namafile);
        $namafileformat = strtolower(end($namafileformat));

        $newfile = uniqid();
        $newfile .= '.';
        $newfile .= $namafileformat;
        $destination = "Assets/img/aset/$newfile";
         
        // Menyimpan image dengan ukuran yang baru
        imagejpeg($image, $destination, $quality); 
        
        // Return image
        return $newfile;
    }

      // function upload foto
    function upload(){
      $namaFile = $_FILES['fotoBarang']['name'];
      $ukuranFile = $_FILES['fotoBarang']['size'];
      $error = $_FILES['fotoBarang']['error'];
      $tmpName = $_FILES['fotoBarang']['tmp_name'];

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

     $compressedImage = compressImage($tmpName, 7);

     // lolos pengecekan, foto siap diupload
     // generate nama gambar baru 

     return $compressedImage;
    }

     function edit($data) {
               global $db;
           $idAset =htmlspecialchars($data['idAset']);    
           $namaBarang =htmlspecialchars($data['namaBarang']);
           $merkBarang =htmlspecialchars($data['merkBarang']);
           $tipeBarang =htmlspecialchars ($data['tipeBarang']);
           $nomorRegister =htmlspecialchars ($data['nomorRegister']);
           $hargaSatuan =htmlspecialchars ($data['hargaSatuan']);
           $hargaSatuan = str_replace('.', '', $hargaSatuan);
           $tahunPembelian =htmlspecialchars ($data['tahunPembelian']);
           $sumberDana =htmlspecialchars ($data['sumberDana']);
           $kondisiBarang =htmlspecialchars ($data['kondisiBarang']);
           $linkRuangan =htmlspecialchars ($data['linkRuangan']);
           $fotoLama =htmlspecialchars ($data['fotoLama']);

            // cek apakah user menambahkan foto baru atau tidak
           if($_FILES['fotoBarang']['error'] === 4 ) {
              $fotoBarang = $fotoLama;
           } else {
              if ($fotoLama == '') {
                $fotoBarang = upload();
              }else{
                $fotoBarang = upload();
                $foto = "Assets/img/aset/$fotoLama";
                unlink($foto);
              }
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