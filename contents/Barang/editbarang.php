<?php   

    require 'config/connect.php';
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbarang WHERE idAset='$id'");
    $barang = mysqli_fetch_assoc($result);


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
                            <i class="bi bi-person-fill" style="font-size:10rem;"></i>
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
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">NamaAset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" value="<?= $barang['namaBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">MerkAset</label>
                        </div>
                        <div class="col-sm-5">
                          <input type="text" class="form-control mt-3" id="disabledInput" value="<?= $barang['merkBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">TipeAset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" value="<?= $barang['tipeBarang'] ?>">
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">NomorRegister</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"  value="<?= $barang['nomorRegister'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">HargaSatuan</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"  value="<?= $barang['hargaSatuan'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">TahunPembelian</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput"  value="<?= $barang['tahunPembelian'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Sumber Dana</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="" id="" class="form-select mt-3">
                                 <option selected disabled>sumberDana</option>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            </select>
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Kondisi</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="" id="" class="form-select mt-3">
                                <option selected disabled>Kondisi</option>
                                <option value="Baru">Baru</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Ruangan</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="" id="" class="form-select mt-3">
                                <option selected disabled>Pilih Ruangan</option>
                                <option value="RPS1">RPS 1</option>
                                <option value="RPS2">RPS 2</option>
                                <option value="RPS3">RPS 3</option>
                                <option value="Perpustakaan">Perpustakaan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">FotoAset</label>
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control mt-3" type="file" id="formFile">
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>

        <div class="row mb-5 text-center">
            <div class="col">
                <a href="index.php?page=DaftarBarang&id=<?php echo $barang['idAset']; ?>" class="btn btn-outline-primary" onclick="confirm('are you sure?')" >Simpan</a>
            </div>
        </div>

	</div>
</main>