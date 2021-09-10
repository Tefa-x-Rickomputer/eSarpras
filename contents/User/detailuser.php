<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Detail user</h1>
            </div>    
        </div>

		<div class="row mt-3 mb-5">
			<div class="col-md-4 justify-content-center mt-3 shadow">
                <div class="card">
                    <div class="text-center">
                        <i class="bi bi-person-fill" style="font-size:10rem;"></i>
                    </div>
                </div>
            </div>


            <div class="col-md mt-3">
                <label for="" class="fs-4 mb-2">Nama</label>
            	<div class="card pt-3 shadow">
                    <p class="ms-3 fs-5">Luthfi</p>
            	</div>

                <label for="" class="fs-4 mt-3 mb-2">NIK</label>
                <div class="card pt-3 shadow">
                    <p class="ms-3 fs-5">1234567890123456</p>
                </div>

                <label for="" class="fs-4 mt-3 mb-2">Role</label>
                <div class="card pt-3 shadow">
                    <p class="ms-3 fs-5">Admin</p>
                </div>

                <label for="" class="fs-4 mt-3 mb-2">Tanggal Lahir</label>
                <div class="card pt-3 shadow">
                    <p class="ms-3 fs-5">24 Juni 2004</p>
                </div>

                <label for="" class="fs-4 mt-3 mb-2">Status</label>
                <div class="card pt-3 shadow">
                    <p class="ms-3 fs-5">Guru</p>
                </div>
            </div>

        </div>
        <div class="row mb-5">
            <div class="col">
                <a href="index.php?page=Useredit" class="btn btn-outline-warning">Edit</a>
                <a href="index.php?page=Userdelete" class="btn btn-outline-danger" onclick="confirm('are you sure?')" >Hapus</a>
            </div>
        </div>

	</div>
</main>