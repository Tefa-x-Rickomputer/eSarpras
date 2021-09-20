<?php   

    require 'config/barangfunctions.php';
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbarang WHERE idAset='$id'");
    $barang = mysqli_fetch_assoc($result);

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$barang[linkRuangan]'");
    $ruangan = (mysqli_fetch_assoc($query));
 
 ?>
<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>DetailBarang</h1>
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
                        <li class="list-group-item mt-3">
                            <b>Nama Aset</b>
                            <div class="float-end"><p><?= $barang['namaBarang'] ?></p></div>
                        </li>
                        <li class="list-group-item mt-3">
                            <b>Nomor Register</b>
                            <div class="float-end"><p><?= $barang['nomorRegister']?></p></div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-8 col-xs-12 mt-3">
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Nama Aset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['namaBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Merk Aset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['merkBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Tipe Aset</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['tipeBarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">NomorRegister</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['nomorRegister'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">HargaSatuan</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['hargaSatuan'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">TahunPembelian</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['tahunPembelian'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">SumberDana</label>
                        </div>
                        <div class="col-sm-5">
                             <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['sumberDana'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Kondisi</label>
                        </div>
                        <div class="col-sm-5">
                   <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $barang['kondisiBarang'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Ruangan</label>
                        </div>
                        <div class="col-sm-5">
                       <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $ruangan['namaRuangan'] ?>">
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>

        <div class="row mb-5 text-center">
            <div class="col">
                <a href="index.php?page=EditBarang&id=<?php echo $barang['idAset']; ?>" class="btn btn-outline-warning">Edit</a>
                <a href="index.php?page=Hapus&id=<?php echo $barang['idAset']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Kamu yakin ingin Menghapus?')" >Hapus</a>
                <a href="index.php?page=DaftarBarang"class="btn btn-outline-primary")>Kembali</a>
            </div>
        </div>

	</div>
</main>