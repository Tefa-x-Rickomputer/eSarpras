<?php 

    outGuest();

    include 'config/bukufunctions.php';
    $id = $_GET['id'];

    $buku = query("SELECT * FROM tbuku WHERE idBuku = $id")[0];

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$buku[linkRuangan]'"); 
    $ruangan = (mysqli_fetch_assoc($query));
    $queryruangan = querySql("SELECT * FROM truangan WHERE isDeleted =0")

   

?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Edit Buku</h1>
    <?php 
        if( isset($_POST['edit']) ) { 
        if( edit($_POST) > 0 ) {
            echo"<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='bi bi-check-circle'></i><span class='ms-3'>Data Berhasil di ubah!</div>
                            <script>
                                //setTimeout(function() {
                                        document.location.href = 'index.php?page=DetailBuku&id=$id';('');
                                    }, 1500)
                            </script>";
        } else {
            echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Data Gagal di ubah!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>"; }
    }

     ?>
    <div class="row">
        <div class="col-md-4">
        </div>
             <form action="" method="POST" enctype="multipart/form-data">
         <div class="row mt-3">
        <div class="col-md">
            <label for="judulBuku">Judul</label>
            <input type="hidden" name="idBuku" value="<?= $buku['idBuku']; ?>">
             <input type="hidden" name="fotoLama" value="<?= $buku['fotoBuku']; ?>">
            <input type="text" class="form-control mt-1" id="disabledInput" name="judulBuku" value="<?= $buku['judulBuku'] ?>">
        </div>
            <div class="col-md">
            <label for="nomorBuku">Nomor Buku</label>
            <input type="text" class="form-control  mt-1" id="disabledInput" name="nomorBuku" value="<?= $buku['nomorBuku'] ?>">
        </div>
            <div class="col-md">
            <label for="nomorRegister">Nomor Register</label>
            <input type="text" class="form-control  mt-1" id="disabledInput" name="nomorRegister" value="<?= $buku['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <label for="">Pengarang</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="pengarang" value="<?= $buku['pengarang'] ?>">
        </div>
        <div class="col-md">
            <label for="">Penerbit</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="penerbit" value="<?= $buku['penerbit'] ?>">
        </div>
        <div class="col-md ">
            <label for="">Tahun Terbit</label>
            <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control mt-1" id="disabledInput" name="tahunTerbit" value="<?= $buku['tahunTerbit'] ?>">
        </div>
    </div>

      
    <div class="row ">
           <div class="col-md mt-3">
             <label for="">Tahun Pembelian</label>
             <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control mt-1" id="disabledInput" name="tahunPembelian" value="<?= $buku['tahunPembelian'] ?>">
        </div>
        <div class="col-md mt-3">
            <label for="">Jumlah Halaman</label>
            <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength="4" class="form-control" name="jumlahHalaman">
        </div>
        
      <div class="col-md mt-3">
            <label for="">Harga Buku</label>
            <div class="input-group">
              <div class="input-group-text mt-1" style="background-color:lightgrey;">Rp</div>
              <input type="number" class="form-control mt-1" id="disabledInput" name="hargaBuku" value="<?= $buku['hargaBuku'] ?>">
            </div>
        </div>
    </div>

        <div class="row mb">
           <div class="col-md mt-3">
             <label for="">Sumber Dana</label>
            <select id="" name="sumberDana" class="form-select">
                               <?php if ($buku['sumberDana'] == 'BOS') : ?>
                                <option value="BOS" selected>BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            <?php else : ?>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA" selected>BOSDA</option>
                            <?php endif; ?>
                            </select>
        </div>
         <div class="col-md mt-3">
             <label for="">Kondisi Buku</label>
             <select id="" name="kondisiBuku" class="form-select">
                            <?php if ($buku['kondisiBuku'] == 'Baik') { ?>
                                <option value="Baik" selected>Baik</option>
                                <option value="Rusak">Rusak</option>
                            <?php }else { ?>
                                <option value="Baik">Baik</option>
                                <option value="Rusak" selected>Rusak</option>
                            <?php } ?>
                            </select>
        </div>
         <div class="col-md mt-3">
             <label for="">Ruangan</label>

              <select id="" name="linkRuangan" va class="form-select">
        <?php foreach($queryruangan as $ruangans) : ?>
              <option
               <?php if($ruangans["idRuangan"] == $ruangan["idRuangan"]) {
                echo "selected";
               } ?>
               value="<?= $ruangans['idRuangan']; ?>"><?= $ruangans['namaRuangan']; ?>
               </option>
              
            <?php endforeach; ?>
                </select>
        </div>
</div>

 <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Upload Foto</label>
             <input type="file" class="form-control mt-1" id="disabledInput" name="fotoBuku">
        </div>
    </div>

        <div class="row">   
            <div class="col-md-2 mt-3">  
                <div class="d-grid">   
                        <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                </div>
            </div> 
            <div class="col-md-2 mt-3 mb-3">  
                <div class="d-grid">   
                       <a href="index.php?page=DetailBuku&id=<?php echo $buku['idBuku']; ?>"class="btn btn-secondary">Kembali</a>
                </div>
            </div>  
        </div>                  
              </div>
                </form>
            </div>
        </div>
  </div>
</main>
