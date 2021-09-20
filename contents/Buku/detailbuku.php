<?php 
     require 'config/bukufunctions.php';
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM tbuku WHERE idbuku='$id'");
    $buku = mysqli_fetch_assoc($result);


 ?>
<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Detail Buku</h1>
            </div>    
        </div>

		<div class="row mt-3 mb-5 card-user">
			<div class="col-md-4 col-xs-12 mt-3">
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <img src=Assets/img/buku/<?= $buku['fotoBuku'] ?> alt="Foto Buku" width="50%" >

                        </div>

                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-3">
                            <b>Judul Buku</b>
                            <div class="float-end"><p><?= $buku['judulBuku'] ?>  </p></div>
                        </li>
                        <li class="list-group-item mt-3">
                            <b>Nomor Buku</b>
                            <div class="float-end"><p><?= $buku['nomorBuku'] ?>  </p></div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-8 col-xs-12 mt-3">
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Judul Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['judulBuku'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Nomor Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['nomorBuku'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Pengarang</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['pengarang'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Penerbit</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['penerbit'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Tahun Terbit</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['tahunTerbit'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Jumlah Halaman</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['jumlahHalaman'] ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Nomor Register</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['nomorRegister'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Tahun Pembelian</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['tahunPembelian'] ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Harga Buku</label>
                        </div>
                        <div class="col-sm-5">
                             <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['hargaBuku'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Sumber Dana</label>
                        </div>
                        <div class="col-sm-5">
                             <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['sumberDana'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Kondisi</label>
                        </div>
                        <div class="col-sm-5">
                   <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['kondisiBuku'] ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Ruangan</label>
                        </div>
                        <div class="col-sm-5">
                       <input type="text" class="form-control mt-3" id="disabledInput" disabled value="<?= $buku['linkRuangan'] ?>">
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>

        <div class="row mb-5 text-center">
            <div class="col">
                <a href="index.php?page=EditBuku&id=<?php echo $buku['idBuku']; ?>" class="btn btn-warning  <?= eclGuest ?>">Edit</a>
                <a href="index.php?page=HapusBuku&id=<?php echo $buku['idBuku']; ?>" class="btn btn-danger <?= eclGuest ?>" onclick="confirm('are you sure?')" >Hapus</a>
                <a href="index.php?page=DaftarBuku"class="btn btn-primary")>Kembali</a>

            </div>
        </div>

	</div>
</main>