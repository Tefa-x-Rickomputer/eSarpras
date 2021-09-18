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
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Edit Aset</h1>
            </div>    
        </div>

		<div class="row mt-3 mb-5 card-user">
			<div class="col-md-4 col-xs-12 mt-3">
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <i class="bi bi-box-seam" style="font-size:10rem;"></i>
                        </div>



                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-2">
                            <b>NamaAset</b>
                            <div class="float-end"><p><?= $barang['namaBarang'] ?></p></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>NomorRegister</b>
                            <div class="float-end"><p><?= $barang['nomorRegister']?></p></div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-8 col-xs-12 mt-3">


                      <form action="" method="POST">
                    <div class="card p-3 pt-1 shadow">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Nama Aset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="hidden" name="idAset" value="<?= $barang['idAset'] ?>">
                            <input type="text" class="form-control mt-3" id="disabledInput"name='namaBarang' value="<?= $barang['namaBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Merk Aset</label>
                        </div>
                        <div class="col-sm-5">
                          <input type="text" class="form-control mt-3" id="disabledInput"name='merkBarang' value="<?= $barang['merkBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Tipe Aset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"name='tipeBarang' value="<?= $barang['tipeBarang'] ?>">
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">NomorRegister</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"name='nomorRegister'  value="<?= $barang['nomorRegister'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">HargaSatuan</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"name='hargaSatuan'  value="<?= $barang['hargaSatuan'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">TahunPembelian</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"name='tahunPembelian'  value="<?= $barang['tahunPembelian'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="sumberDana" class="fw-bold fs-5 mt-3">SumberDana</label>
                        </div>
                        <div class="col-sm-5">
                            <select id="" name="sumberDana" class="form-select mt-3">
                               <?php if ($barang['sumberDana'] == 'BOS') : ?>
                                <option value="BOS" selected>BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            <?php else : ?>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA" selected>BOSDA</option>
                            <?php endif; ?>
                            </select>
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Kondisi</label>
                        </div>
                        <div class="col-sm-5">
                        <select id="" name="kondisiBarang" class="form-select mt-3">
                            <?php if ($barang['kondisiBarang'] == 'Baik') : ?>
                                <option value="Baik" selected>Baru</option>
                                <option value="Rusak">Rusak</option>
                            <?php else : ?>
                                <option value="Baik">Baru</option>
                                <option value="Rusak" selected>Rusak</option>
                            <?php endif; ?>
                            </select>
                        </div>
                    </div>

                        <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Ruangan</label>
                        </div>
                        <div class="col-sm-5">
                            <select id="" name="linkRuangan" va class="form-select mt-3">

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

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Foto Barang</label>
                        </div>
                        <div class="col-sm-5">
                            <input name="fotoBarang" class="form-control mt-3" type="file" id="formFile">
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>

        <div class="row mb-5 text-center">
            <div class="col mt-5">
               <button type="submit" name="edit" class="btn btn-success">Update</button>
             <a href="index.php?page=DetailBarang&id=<?php echo $barang['idAset']; ?>"class="btn btn-danger">Batal</a>
            </form>
            </div>
    </div>
</main>