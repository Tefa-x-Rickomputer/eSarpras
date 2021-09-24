<?php 
     require 'config/bukufunctions.php';
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbuku WHERE idbuku='$id'");
    $buku = mysqli_fetch_assoc($result);

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$buku[linkRuangan]'"); 
    $ruangan = (mysqli_fetch_assoc($query));

    $nilai = $buku['hargaBuku'];
    $harga = number_format($nilai,0,',','.');
 ?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Detail Buku</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center border rounded" style="background-color:rgb(233,236,239)">
                 <img src=Assets/img/buku/<?= $buku['fotoBuku'] ?> alt="Foto Buku" style="height:14.3rem;" >
            </div>
        </div>
        <div class="col-md-8">
            <label for="judulBuku">Judul</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="judulBuku" disabled value="<?= $buku['judulBuku'] ?>">
            <label for="nomorBuku">Nomor ISBN / ISSN</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="nomorBuku" disabled value="<?= $buku['nomorBuku'] ?>">
            <label for="nomorRegister">Nomor Register</label>
            <input type="text" class="form-control mb-3 mt-1" id="disabledInput" name="nomorRegister" disabled value="<?= $buku['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <label for="">Pengarang</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="pengarang" disabled value="<?= $buku['pengarang'] ?>">
        </div>
        <div class="col-md">
            <label for="">Penerbit</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="penerbit" disabled value="<?= $buku['penerbit'] ?>">
        </div>
        <div class="col-md ">
            <label for="">Tahun Terbit</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="tahunTerbit" disabled value="<?= $buku['tahunTerbit'] ?>">
        </div>
    </div>

      
    <div class="row ">
           <div class="col-md mt-3">
             <label for="">Tahun Pembelian</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="tahunPembelian" disabled value="<?= $buku['tahunPembelian'] ?>">
        </div>
        <div class="col-md mt-3">
            <label for="">Jumlah Halaman</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="jumlahHalaman" disabled value="<?= $buku['jumlahHalaman'] ?>">
        </div>
        
        <div class="col-md mt-3">
            <label for="">Harga Buku</label>
            <div class="input-group">
              <div class="input-group-text mt-1" style="background-color:lightgrey;">Rp</div>
              <input type="text" class="form-control mt-1 text-end" id="disabledInput" name="hargaBuku" disabled value="<?= $harga ?>">
            </div>
        </div>
    </div>

        <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Sumber Dana</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="sumberDana" disabled value="<?= $buku['sumberDana'] ?>">
        </div>
         <div class="col-md mt-3">
             <label for="">Kondisi Buku</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="kondisiBuku" disabled value="<?= $buku['kondisiBuku'] ?>">
        </div>
         <div class="col-md mt-3">
             <label for="">Ruangan</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="namaRuangan" disabled value="<?= $ruangan['namaRuangan'] ?>">
        </div>
</div>

     <div class="row">   
            <div class="col-md-2 mt-3">  
                <div class="d-grid">   
                          <a href="index.php?page=EditBuku&id=<?php echo $buku['idBuku']; ?>" class="btn btn-success  <?= eclGuest ?>">Edit</a>
                </div>
            </div> 
               <div class="col-md-2 mt-3">  
                <div class="d-grid">   
                        <a href="index.php?page=HapusBuku&id=<?php echo $buku['idBuku']; ?>" class="btn btn-danger <?= eclGuest ?>" onclick="return confirm('Apa Kamu Yakin Mau Hapus?')" >Hapus</a>
                </div>
            </div> 
             <div class="col-md-2 mt-3 mb-3">  
                <div class="d-grid">   
               <a href="index.php?page=DaftarBuku"class="btn btn-secondary")>Kembali</a>
                </div>
            </div>   
                   
                    </div>
                </div>
            </div>
        </div>
  </div>
</main>
