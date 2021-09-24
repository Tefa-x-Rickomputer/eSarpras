<?php   

    require 'config/connect.php';
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbarang WHERE idAset='$id'");
    $barang = mysqli_fetch_assoc($result);

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$barang[linkRuangan]'");
    $ruangan = (mysqli_fetch_assoc($query));
    
    $nilai = $barang['hargaSatuan'];
    $harga = number_format($nilai,0,',','.');

 ?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Aset</h1>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="text-center border rounded position-relative" style="background-color:rgb(233,236,239);height:14.3rem; max-width:22rem;">
                <div class="position-absolute start-50 top-50 translate-middle">
                 <img class="" src="Assets/img/aset/<?= $barang['fotoBarang']?>" alt="Foto Aset" style="height:13.3rem; max-width:21rem;">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <label for="namaBarang" class="mt-3">Nama Aset</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="namaBarang" disabled value="<?= $barang['namaBarang'] ?>">

            <label for="merkBarang" class="mt-3">Merk Aset</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="merkBarang" disabled value="<?= $barang['merkBarang'] ?>">

            <label for="nomorRegister" class="mt-3">Nomor Register</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="nomorRegister" disabled value="<?= $barang['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md mt-3">
            <label for="">Tipe Aset</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="tipeBarang" disabled value="<?= $barang['tipeBarang'] ?>">
        </div>
        <div class="col-md mt-3">
            <label for="">Harga Satuan</label>
            <div class="input-group">
            <div class="input-group-text mt-1" style="background-color:lightgrey;">Rp</div>
            <input type="text" class="form-control mt-1 text-end" id="disabledInput" name="hargaSatuan" disabled value="<?= $harga ?>">
        </div>
        </div>
      
           <div class="col-md mt-3">
             <label for="">Tahun Pembelian</label>
             <input type="text"class="form-control mt-1" id="disabledInput" name="tahunPembelian" disabled value="<?= $barang['tahunPembelian'] ?>">
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
      
            <div class="row">
        <div class="col-md-2 mt-3 ">
            <div class="d-grid">
                    <a href="index.php?page=EditBarang&id=<?php echo $barang['idAset']; ?>" class="btn btn-success  <?= eclGuest ?>">Edit</a>
                </div>
            </div>

            <div class="col-md-2 mt-3 ">
            <div class="d-grid">
                    <button type="button" class="btn btn-danger shadow <?= eclGuest ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
                </div>
            </div>
            <div class="col-md-2 mt-3 mb-3">
            <div class="d-grid">
                     <a href="index.php?page=DaftarBarang"class="btn btn-secondary")>Kembali</a>
                </div>
            </div>
        </div>

        <!-- Modal untuk hapus -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $barang['namaBarang']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah yakin ingin Aset ini dihapus?</h5>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <a href="index.php?page=Hapus&id=<?php echo $barang['idAset']; ?>" class="btn btn-primary">Yakin</a>
                    </div>
                </div>
            </div>
        </div>
  </div>
</main>
