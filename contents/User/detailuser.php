<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Detail user</h1>
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
                        <li class="list-group-item mt-2 text-center display-5 pb-3">Luthfi</li>
                        <li class="list-group-item mt-2">
                            <b>NIK</b>
                            <div class="float-end">1234567890123456</div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Role</b>
                            <div class="float-end">Admin</div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Tanggal Lahir</b>
                            <div class="float-end">24 Juni 2004</div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Status</b>
                            <div class="float-end">Guru</div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Email</b>
                            <div class="float-end">iniemailexample@gmail.com</div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>No. Telp</b>
                            <div class="float-end">08126946727</div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-8 col-xs-12 mt-3">
                <div class="card p-3 pt-1 shadow">
                    
                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Nama</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control mt-3" value="Luthfi">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tempat Tgl. Lahir</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-3" value="Banjarmasin">
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" value="2004-06-24">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label for="" class="fw-bold fs-5 mt-3">Tempat Tgl. Lahir</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-3" value="Banjarmasin">
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control mt-3" value="2004-06-24">
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>

        <div class="row mb-5 text-center">
            <div class="col">
                <a href="index.php?page=Useredit" class="btn btn-outline-warning">Edit</a>
                <a href="index.php?page=Userdelete" class="btn btn-outline-danger" onclick="confirm('are you sure?')" >Hapus</a>
            </div>
        </div>

	</div>
</main>