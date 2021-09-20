<?php

  require 'config/bukufunctions.php';

  if (isset($_POST['simpan']) ) {
    if( addbuku($_POST) > 0 ) {
      echo"<script>
          alert('Data berhasil di tambah');
          </script>";
    } else {
      echo "data gagal ditambahkan!!!";
    }
  }

 ?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Buku</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Tambah Buku</li>
    </ol>

    <div class="d-flex bg-dark text-white p-3"><span class="text-dark">s</span></div>

    <form action="" method="post">
      <div class="row">

         <div class="col-md mt-3">
          <label for="judulBuku">Judul Buku</label>
          <input type="text" class="form-control" name="judulBuku">
        </div>


       <div class="col-md mt-3">
           <label for="">Nomor Buku</label>
          <input type="text" class="form-control" name="nomorBuku">
        </div>

        <div class="col-md mt-3">
            <label for="">Pengarang</label>
          <input type="text" class="form-control" name="pengarang">
        </div>

      </div>


      <div class="row">
               <div class="col-md mt-3">
            <label for="">Penerbit</label>
          <input type="text" class="form-control" name="penerbit">
        </div>
        <div class="col-md mt-3">
            <label for="">Tahun Terbit</label>
          <input type="text" class="form-control" name="tahunTerbit">
        </div>

          <div class="col-md mt-3">
           <label for="">Jumlah Halaman</label>
          <input type="text" class="form-control" name="jumlahHalaman">
        </div>

      </div>

      <div class="row">
            <div class="col-md mt-3">
           <label for="">Nomor Register</label>
          <input type="text" class="form-control" name="nomorRegister">
        </div>

          <div class="col-md mt-3">
            <label for="">Tahun Pembelian</label>
          <input type="text" class="form-control" name="tahunPembelian">
        </div>

        <div class="col-md mt-3">
            <label for="">Harga Buku</label>
          <input type="text" class="form-control" name="hargaBuku">
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
         <option value="1">Baru</option>
         <option value="2">Rusak</option>
       </select>
     </div>

        <div class="col-md mt-3">
            <label for="">Ruangan</label>
        <select class="form-select" aria-label="Default select example" name="linkRuangan">
          <option value="1">RPS 1</option>
           <option value="2">RPS 2</option>
           <option value="3">RPS 3</option>
           <option value="4">RPS 4</option>
        </select>
        </div>

      <div class="col-md mt-3">
            <label for="">Upload File</label>
          <input type="file" class="form-control" name="fotoBuku">      
      </div>
      <div class=" mt-3">

          <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>    
          <button class="btn btn-danger" type="reset">Batal</button>

      </div>

    </form>


  </div>
</main>