

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Edit Sarpras</h1>
    <div class="row">
        <?php   
    
    outGuest();

    include 'config/barangfunctions.php';
    $queryruangan = querySql("SELECT * FROM truangan WHERE isDeleted = 0");

    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbarang WHERE idAset='$id'");
    $barang = mysqli_fetch_assoc($result);

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$barang[linkRuangan]'");
    $ruangan = (mysqli_fetch_assoc($query));

    if( isset($_POST['edit']) ) {
    if( edit($_POST) > 0 ) {
      echo"<div class='alert alert-success' role='alert'>
      <i class='bi bi-check-circle'></i> Data berhasil diubah!
          </div>
          <script>
               setTimeout(function(){
                document.location.href ='index.php?page=DetailBarang&id=$id';('');
            }, 1500)
                  </script>";
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i> Data Gagal diubah!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";


    }
  }

      $nilai = $barang['hargaSatuan'];
    $harga = number_format($nilai,0,',','.');

 ?>
    </div>
    <div class="row">
             <form action="" method="POST" enctype="multipart/form-data">
             <div class="row mt-3">
        <div class="col-md">
            <label for="namaBarang">Nama Sarpras</label>
            <input type="text" class="form-control mb-1 mt-1" id="disabledInput" name="namaBarang"  value="<?= $barang['namaBarang'] ?>">
            <input type="hidden" name="idAset" value="<?= $barang['idAset']; ?>">
             <input type="hidden" name="fotoLama" value="<?= $barang['fotoBarang']; ?>">
          </div>
        <div class="col-md">
            <label for="merkBarang">Merk Sarpras</label>
            <input type="text" class="form-control mb-1 mt-1" id="disabledInput" name="merkBarang"  value="<?= $barang['merkBarang'] ?>">
          </div>
        <div class="col-md">
            <label for="nomorRegister">Nomor Register</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="nomorRegister"  value="<?= $barang['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <label for="">Tipe Sarpras</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="tipeBarang"  value="<?= $barang['tipeBarang'] ?>">
        </div>
        <div class="col-md">
            <label for="">Harga Satuan</label>
            <div class="input-group">
            <div class="input-group-text" style="background-color:lightgrey;">Rp</div>
            <input type="text" id="rupiah" class="form-control" name="hargaSatuan" value="<?= $harga ?>" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" >
            </div>
        </div>
      
           <div class="col-md">
             <label for="">Tahun Pembelian</label>
             <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control mt-1" id="disabledInput" name="tahunPembelian" maxlength="4" value="<?= $barang['tahunPembelian'] ?>">
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
                                <option value="Baik" selected>Baik</option>
                                <option value="Rusak">Rusak</option>
                            <?php else : ?>
                                <option value="Baik">Baik</option>
                                <option value="Rusak" selected>Rusak</option>
                            <?php endif; ?>
                            </select>
        </div>

         <div class="col-md mt-3">
             <label for="">Ruangan</label>
             <select id="" name="linkRuangan" class="form-select"> 
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
             <input type="file" class="form-control mt-1" id="disabledInput" name="fotoBarang">
        </div>
    </div>

        <div class="row">
        <div class="col-md-2 mt-3 ">
            <div class="d-grid">
                       <button type="submit" name="edit" class="btn btn-primary shadow">Simpan</button>
                    </div>
                </div>

                       <div class="col-md-2 mt-3 mb-3">
            <div class="d-grid">
                   <a href="index.php?page=DetailBarang&id=<?php echo $barang['idAset']; ?>"class="btn btn-secondary shadow">Kembali</a>
                </div>
                </div>
            </form>
            </div>
        </div>
      </div>
  </div>
</main>
