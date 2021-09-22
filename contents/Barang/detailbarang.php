<?php   

    require 'config/connect.php';
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbarang WHERE idAset='$id'");
    $barang = mysqli_fetch_assoc($result);

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$barang[linkRuangan]'");
    $ruangan = (mysqli_fetch_assoc($query));
 
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
            <label for="namaBarang">Nama Aset</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="namaBarang" disabled value="<?= $barang['namaBarang'] ?>">
            <label for="merkBarang">Merk Barang</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="merkBarang" disabled value="<?= $barang['merkBarang'] ?>">
            <label for="nomorRegister">Nomor Register</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="nomorRegister" disabled value="<?= $barang['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <label for="">Tipe Aset</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="tipeBarang" disabled value="<?= $barang['tipeBarang'] ?>">
        </div>
        <div class="col-md">
            <label for="">Harga Satuan</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="hargaSatuan" disabled value="<?= $barang['hargaSatuan'] ?>">
        </div>
      
           <div class="col-md">
             <label for="">Tahun Pembelian</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="tahunPembelian" disabled value="<?= $barang['tahunPembelian'] ?>">
        </div>
    </div>
        <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Sumber Dana</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="sumberDana" disabled value="<?= $barang['sumberDana'] ?>">
        </div>
         <div class="col-md mt-3">
             <label for="">Kondisi</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="kondisiBarang" disabled value="<?= $barang['kondisiBarang'] ?>">
        </div>
         <div class="col-md mt-3">
             <label for="">Ruangan</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="namaRuangan" disabled value="<?= $ruangan['namaRuangan'] ?>">
        </div>
</div>

        <div class="row mt-4">
            <div class="col-md-2">
                <div class="d-grid">
                    <a href="index.php?page=DaftarBarang"class="btn btn-primary")>Kembali</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid">
                    <a href="index.php?page=EditBarang&id=<?php echo $barang['idAset']; ?>" class="btn btn-warning  <?= eclGuest ?>">Edit</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid">
                    <a href="index.php?page=Hapus&id=<?php echo $barang['idAset']; ?>" class="btn btn-danger <?= eclGuest ?>" onclick="confirm('Apa Kamu Yakin Mau Hapus?')" >Hapus</a>
                </div>
            </div>
        </div>
  </div>
</main>
