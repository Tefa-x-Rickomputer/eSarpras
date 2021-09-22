<?php   
    

    include 'config/barangfunctions.php';
    
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbarang WHERE idAset='$id'");
    $barang = mysqli_fetch_assoc($result);

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$barang[linkRuangan]'");
    $ruangan = (mysqli_fetch_assoc($query));

    if( isset($_POST['edit']) ) {
    if( edit($_POST) > 0 ) {
      echo"<script>
          alert('Data berhasil Update');
          document.location.href = 'index.php?page=DaftarBarang';
          </script>";
    } else {
      echo "<script>
          alert('Data gagal Update');
          </script>";
    }
  }
 ?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Data Barang</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center border rounded" style="background-color:rgb(233,236,239)">
                 <img src=Assets/img/aset/<?= $barang['fotoBarang'] ?> alt="Foto Barang" width="75%" >
            </div>
        </div>
        <div class="col-md-8">
             <form action="" method="POST" enctype="multipart/form-data">
            <label for="namaBarang">Nama Aset</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="namaBarang"  value="<?= $barang['namaBarang'] ?>">
            <label for="merkBarang">Merk Barang</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="merkBarang"  value="<?= $barang['merkBarang'] ?>">
            <label for="nomorRegister">Nomor Register</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="nomorRegister"  value="<?= $barang['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <label for="">Tipe Aset</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="tipeBarang"  value="<?= $barang['tipeBarang'] ?>">
        </div>
        <div class="col-md">
            <label for="">Harga Satuan</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="hargaSatuan"  value="<?= $barang['hargaSatuan'] ?>">
        </div>
      
           <div class="col-md">
             <label for="">Tahun Pembelian</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="tahunPembelian"  value="<?= $barang['tahunPembelian'] ?>">
        </div>
    </div>
        <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Sumber Dana</label>
                            <select id="" name="sumberDana" class="form-select">
                               <?php if ($barang['sumberDana'] == 'BOS') : ?>
                                <option value="BOS" selected>BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            <?php else : ?>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA" selected>BOSDA</option>
                            <?php endif; ?>
                            </select>
                        </div>

         <div class="col-md mt-3">
             <label for="">Kondisi</label>
             <select id="" name="kondisiBarang" class="form-select">
                            <?php if ($barang['kondisiBarang'] == 'Baik') : ?>
                                <option value="Baik" selected>Baru</option>
                                <option value="Rusak">Rusak</option>
                            <?php else : ?>
                                <option value="Baik">Baru</option>
                                <option value="Rusak" selected>Rusak</option>
                            <?php endif; ?>
                            </select>
        </div>

         <div class="col-md mt-3">
             <label for="">Ruangan</label>
             <select id="" name="linkRuangan" va class="form-select">
                            <?php if ($ruangan['idRuangan'] == '1') : ?>
                                <option value="1" selected>RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                            <?php elseif ($ruangan['idRuangan'] == '2') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2" selected>RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                            <?php elseif ($ruangan['idRuangan'] == '3') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3" selected>RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                          <?php elseif ($ruangan['idRuangan'] == '4') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4" selected>RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                          <?php elseif ($ruangan['idRuangan'] == '5') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5" selected>RPS 5</option>
                                <option value="6">Perpustakaan</option>
                          <?php else : ($ruangan['namaRuangan'] == '6') ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6" selected>Perpustakaan</option>
                            <?php endif; ?>
                            </select>
                        </div>
                    </div>

      <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Upload Foto</label>
             <input type="file" class="form-control mt-1" id="disabledInput" name="fotoBarang">
        </div>
    </div>

        <div class="row mt-4">
            <div class="col-md-2">
                <div class="d-grid">
                       <button type="submit" name="edit" class="btn btn-success">Update</button>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid">
                   <a href="index.php?page=DetailBarang&id=<?php echo $barang['idAset']; ?>"class="btn btn-danger">Batal</a>
                </div>
            </form>
            </div>
        </div>
  </div>
</main>
