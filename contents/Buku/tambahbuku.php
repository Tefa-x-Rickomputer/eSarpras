<?php
    // if(isset($_POST['bsimpan']))
    //     {
    //   // perintah simpan data baru
    //   // simpan data 

    //   $simpan = mysqli_query($connect, "INSERT INTO tbuku
    //                     VALUES (  '', 
    //                             '$_POST[judulBuku]',
    //                             '$_POST[nomorBuku]',
    //                             '$_POST[pengarang]',
    //                             '$_POST[penerbit]',
    //                             '$_POST[tahunTerbit]',
    //                             '$_POST[jumlahHalaman]',
    //                             '$_POST[nomorRegister]',
    //                             '$_POST[tahunPembelian]',
    //                             '$_POST[hargaBuku]',
    //                             '$_POST[sumberDana]',
    //                             '$_POST[kondisiBuku]',
    //                             '$_POST[linkRuangan]'
    //                              ) ");

    // }
   
  
 ?>


<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Buku</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">Tambah Buku</li>
    </ol>

    <div class="d-flex bg-dark text-white p-3"><span class="text-dark">s</span></div>
    <form action="" method="post">
      <div class="row">

         <div class="col-md mt-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Judul Buku</label>
          </div>
        </div>


       <div class="col-md mt-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nomor Buku</label>
          </div>
        </div>

        <div class="col-md mt-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Pengarang</label>
          </div>
        </div>

      </div>


      <div class="row">
               <div class="col-md mt-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Penerbit</label>
          </div>
        </div>
        <div class="col-md mt-3">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Tahun Terbit</label>
          </div>
        </div>

          <div class="col-md mt-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Jumlah Halaman</label>
          </div>
        </div>

      </div>

      <div class="row">
          <div class="col-md mt-3">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Tahun Pembelian</label>
          </div>
        </div>

        <div class="col-md mt-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Harga Buku</label>
          </div>
        </div>

                <div class="col-md mt-3">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect">
              <option value="bos">BOS</option>
              <option value="bosda">BOSDA</option>
            </select>
            <label for="floatingSelect">Sumber Dana</label>
          </div>
        </div>

      </div>

      <div class="row mb-3">

        <div class="col-md mt-3">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect">
              <option value="Baru">Baru</option>
              <option value="Bagus">Bagus</option>
              <option value="Baik">Baik</option>
              <option value="Rusak">Rusak</option>
            </select>
            <label for="floatingSelect">Kondisi</label>
          </div>
        </div>

        <div class="col-md mt-3">
          <div class="form-floating">
            <select class="form-select" id="floatingSelect">
              <option selected disabled="true">Pilih Ruangan</option>
              <option value="rps1">RPS 1</option>
              <option value="rps2">RPS 2</option>
              <option value="rps3">RPS 3</option>
              <option value="rps3">RPS 4</option>
            </select>
            <label for="floatingSelect">Ruangan</label>
          </div>
        </div>

      <div class="col-md mt-1">
        <div class="form-group">
          <label for="file"></label>
          <input type="file" class="form-control" id="file" name="file" value="<?=@$vfile?>">
        </div>
      </div>


      </div>
      <button type="button" name="bsimpan" class="btn btn-primary">Simpan</button>
    </form>


  </div>
</main>