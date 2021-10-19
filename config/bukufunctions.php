<?php
     require_once 'connect.php';
     // $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');

     function query($query) {
          global $db;
          $result = mysqli_query($db, $query);
          $rows = [];
          while( $row = mysqli_fetch_assoc($result) ) {
               $rows[] = $row;
          }
          return $rows;
     }
     
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
       $hargaBuku = str_replace('.', '', $hargaBuku); 
       $sumberDana =htmlspecialchars($data['sumberDana']); 
       $kondisiBuku =htmlspecialchars($data['kondisiBuku']); 
       $linkRuangan =htmlspecialchars($data['linkRuangan']); 
       

        if ($_FILES['fotoBuku']['error'] === 4) {
       $query = "INSERT INTO `tbuku` (`idBuku`, `judulBuku`,`fotoBuku`, `nomorBuku`, `pengarang`, `penerbit`, `tahunTerbit`, `jumlahHalaman`, `nomorRegister`, `tahunPembelian`, `hargaBuku`, `sumberDana`, `kondisiBuku`, `linkRuangan`, `isDeleted`) VALUES (NULL, '$judulBuku', '', '$nomorBuku', '$pengarang', '$penerbit', '$tahunTerbit', '$jumlahHalaman', '$nomorRegister', '$tahunPembelian', '$hargaBuku', '$sumberDana', '$kondisiBuku', '$linkRuangan', 0)";
       }else{
            $fotoBuku = upload();
        $query = "INSERT INTO `tbuku` (`idBuku`, `judulBuku`,`fotoBuku`, `nomorBuku`, `pengarang`, `penerbit`, `tahunTerbit`, `jumlahHalaman`, `nomorRegister`, `tahunPembelian`, `hargaBuku`, `sumberDana`, `kondisiBuku`, `linkRuangan`, `isDeleted`) VALUES (NULL, '$judulBuku', '$fotoBuku', '$nomorBuku', '$pengarang', '$penerbit', '$tahunTerbit', '$jumlahHalaman', '$nomorRegister', '$tahunPembelian', '$hargaBuku', '$sumberDana', '$kondisiBuku', '$linkRuangan', 0)";
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
        $namafile = $_FILES['fotoBuku']['name'];

        $fileformat = ['png', 'jpeg', 'jpg', 'jfif', 'gif'];
        $namafileformat = explode('.', $namafile);
        $namafileformat = strtolower(end($namafileformat));

        $newfile = uniqid();
        $newfile .= '.';
        $newfile .= $namafileformat;
        $destination = "Assets/img/buku/$newfile";
         
        // Menyimpan image dengan ukuran yang baru
        imagejpeg($image, $destination, $quality); 
        
        // Return image
        return $newfile;
    }

    // function upload foto
    function upload(){
      $namaFile = $_FILES['fotoBuku']['name'];
      $ukuranFile = $_FILES['fotoBuku']['size'];
      $error = $_FILES['fotoBuku']['error'];
      $tmpName = $_FILES['fotoBuku']['tmp_name'];

      // cek apakah tidak ada foto yang diupload
     // if ( $error === 4 ){
     //    echo "<script>
     //            alert('pilih gambar terlebih dahulu!');
     //           </script> ";
     //    return false;
     // }

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

     return $compressedImage;
    }

    // function hapus
     function hapus($id) {
          global $db;
          mysqli_query($db, "UPDATE tbuku SET isDeleted = 1 WHERE idBuku = $id");

          return mysqli_affected_rows($db);
     }


      // function edit
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
           $hargaBuku = str_replace('.', '', $hargaBuku); 
           $sumberDana =htmlspecialchars($data['sumberDana']); 
           $kondisiBuku =htmlspecialchars($data['kondisiBuku']); 
           $linkRuangan =htmlspecialchars($data['linkRuangan']);
           $fotoLama =htmlspecialchars($data['fotoLama']);

           // cek apakah user menambahkan foto baru atau tidak
           if($_FILES['fotoBuku']['error'] === 4 ) {
              $fotoBuku = $fotoLama;
           } else {
                if ($fotoLama == '') {
                $fotoBuku = upload();
              }else{
                $fotoBuku = upload();
                $foto = "Assets/img/buku/$fotoLama";
                unlink($foto);
              }
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