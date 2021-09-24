<?php

  outGuest();

  require 'config/bukufunctions.php';
  $queryruangan = querySql("SELECT * FROM truangan WHERE isDeleted =0")
 ?>


<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Buku</h1>
    
    <?php 
      if (isset($_POST['simpan']) ) {
    if( addbuku($_POST) > 0 ) {
      echo"<div class='alert alert-success' role='alert'>
        Data berhasil ditambahkan
        </div>
      <script>
          setTimeout(function(){
            document.location.href ='index.php?page=DaftarBuku';('');
           }, 1500)
          </script>";
    } else {
      echo"<div class='alert alert-danger' role='alert'>
        Data gagal ditambahkan
        </div>
      <script>
          setTimeout(function(){
            document.location.href ='index.php?page=TambahBuku';('');
           }, 100000)
          </script>";
    }
  }


     ?>

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="row">

         <div class="col-md mt-3">
          <label for="judulBuku">Judul Buku</label>
          <input type="text" class="form-control" name="judulBuku" required>
        </div>


       <div class="col-md mt-3">
           <label for="">Nomor ISBN / ISSN</label>
          <input type="text" class="form-control" name="nomorBuku" required>
        </div>

        <div class="col-md mt-3">
            <label for="">Pengarang</label>
          <input type="text" class="form-control" name="pengarang" required>
        </div>

      </div>


      <div class="row">
               <div class="col-md mt-3">
            <label for="">Penerbit</label>
          <input type="text" class="form-control" name="penerbit" required>
        </div>
        <div class="col-md mt-3">
            <label for="">Tahun Terbit</label>
          <input type="number" class="form-control" name="tahunTerbit" maxlength="4" required >
        </div>

          <div class="col-md mt-3">
           <label for="">Jumlah Halaman</label>
          <input type="number" class="form-control" name="jumlahHalaman" required>
        </div>

      </div>

      <div class="row">
            <div class="col-md mt-3">
           <label for="">Nomor Register</label>
          <input type="text" class="form-control" name="nomorRegister">
        </div>

          <div class="col-md mt-3">
            <label for="">Tahun Pembelian</label>
          <input type="text" class="form-control" name="tahunPembelian" maxlength="4" required>
        </div>

        <div class="col-md mt-3">
            <label for="">Harga Buku</label>
          <input type="text" class="form-control" name="hargaBuku" required>
        </div>
          </div>

      <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Sumber Dana</label>
        <select class="form-select" aria-label="Default select example" name="sumberDana">
          <option value="1">BOS</option>
          <option value="2">BOSDA</option>
        </select>
       </div>

        <div class="col-md mt-3">
            <label for="kondisiBuku">Kondisi</label>
       <select class="form-select" aria-label="Default select example" name="kondisiBuku">
         <option value="Baru">Baik</option>
         <option value="Rusak">Rusak</option>
       </select>
     </div>

        <div class="col-md mt-3">
        <label for="">Ruangan</label>
        <select class="form-select" aria-label="Default select example" name="linkRuangan">
          <?php foreach($queryruangan as $ruangan) : ?>
          <option value="<?= $ruangan['idRuangan']; ?>"><?= $ruangan['namaRuangan']; ?></option>
        <?php endforeach; ?>
        </select>
        </div>

      <div class="col-md mt-3">
            <label for="">Upload File</label>
          <input type="file" class="form-control" name="fotoBuku">      
      </div>
    </div>

          <div class="row">   
            <div class="col-md-2 mt-3">  
                <div class="d-grid">   
                         <button class="btn btn-primary" type="submit" name="simpan">Simpan</button> 
                </div>
            </div> 
             <div class="col-md-2 mt-3 mb-3">  
                <div class="d-grid">   
                      <a href="index.php?page=DaftarBuku"class="btn btn-danger")>Batal</a>
                </div>
            </div>  
      </div>

    </form>


  </div>
</main>