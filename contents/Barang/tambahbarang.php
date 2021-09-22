<?php

  require 'config/barangfunctions.php';

  if (isset($_POST['simpan']) ) {
    if( addbarang($_POST) > 0 ) {
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
    <h1 class="mt-4">Tambah Barang</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">Tambah Barang</li>
    </ol>

    <div class="d-flex bg-dark text-white p-3"><span class="text-dark">s</span></div>
    <form action="" method="post">
      <div class="row">

        <div class="col-md mt-3">
          <label for="judulBuku">Nama Barang</label>
          <input type="text" class="form-control" name="namaBarang">
        </div>


       <div class="col-md mt-3">
           <label for="">Merk Barang</label>
          <input type="text" class="form-control" name="merkBarang">
        </div>

        <div class="col-md mt-3">
            <label for="">Tipe Barang</label>
          <input type="text" class="form-control" name="tipeBarang">
        </div>

      </div>


      <div class="row">
               <div class="col-md mt-3">
            <label for="">Nomor Register</label>
          <input type="text" class="form-control" name="nomorRegister">
        </div>
        <div class="col-md mt-3">
            <label for="">Harga Satuan</label>
          <input type="text" class="form-control" name="hargaSatuan">
        </div>

          <div class="col-md mt-3">
           <label for="">Tahun Pembelian</label>
          <input type="text" class="form-control" name="tahunPembelian">
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
       <select class="form-select" aria-label="Default select example" name="kondisiBarang">
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
           <option value="5">Perpustakaan</option>
        </select>
        </div>

      <div class="col-md mt-3">
            <label for="">Upload File</label>
          <input type="file" class="form-control" name="fotoBarang">      
      </div>
      <div class=" mt-3">
          <button class="btn btn-outline-primary" type="submit" name="simpan">Simpan</button>    
      </div>

    </form>


  </div>
</main>