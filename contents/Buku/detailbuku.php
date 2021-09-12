
<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Detail Buku</h1>
            </div>    
        </div>

		<div class="row mt-3 mb-5 card-user">
			<div class="col-md-3 col-xs-12 mt-3">
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <i class="bi bi-person-fill" style="font-size:10rem;"></i>
                        </div>

                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-2">
                            <b>Judul Buku</b>
                            <div class="float-end">Belajar PHP Dasar</div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Nomor Buku</b>
                            <div class="float-end">0213903</div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-9 col-xs-12 mt-3">
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Judul Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" value="Belajar Php dasar">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Nomor Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" value="01381931">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Pengarang</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" value="Rahmatullah">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Penerbit</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" value="Rahmatullah">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tahun Terbit</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" value="2003-08-02">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Jumlah Halaman</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" value="100">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tahun Pembelian</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" value="2004-06-24">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Harga Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" value="RP. 300.000">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Sumber Dana</label>
                        </div>
                        <div class="col-sm-5">
                            <select name="" id="" class="form-select mt-3">
                                <option selected disabled>Sumber Dana</option>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            </select>
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-2">
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
                        <div class="col-sm-2">
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
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Foto Buku</label>
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
                <a href="index.php?page=EditBuku" class="btn btn-outline-warning">Edit</a>
                <a href="index.php?page=DaftarBuku" class="btn btn-outline-danger" onclick="confirm('are you sure?')" >Hapus</a>
            </div>
        </div>

	</div>
</main>