<?php 
    include 'config/userfunctions.php';
    $id = $_GET['id'];
    $user = query("SELECT * FROM tuser WHERE idUser = $id")[0];
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Detail User</h1>

        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="text-center border rounded shadow-sm position-relative" style="height: 13.5rem; background-color:rgb(233,236,239);">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img class="profile-photo" src="Assets/img/user/<?= $user['fotoProfil'] ?>" alt="Foto Profil" style="margin:auto;">
                    </div>
                </div>
            </div>

            <div class="col-md">
                <label for="" class="mt-3">Nama</label>
                <input type="text" class="form-control shadow-sm" disabled name="nama" value="<?= $user['nama']; ?>">

                <label for="" class="mt-3">Jabatan</label>
                <input type="text" class="form-control shadow-sm" disabled name="status" value="<?= $user['status']; ?>">

                <label for="" class="mt-3">Hak Akses</label>
                <input type="text" class="form-control shadow-sm" disabled name="role" value="<?= $user['role']; ?>">
            </div>

        </div>

        <div class="row">
            <div class="col-md">
                <label for="" class="mt-3">Email</label>
                <input type="text" class="form-control shadow-sm" disabled name="email" value="<?= $user['email']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Nomor Telpon</label>
                <input type="text" class="form-control shadow-sm" disabled name="telpon" value="<?= $user['telpon']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Alamat</label>
                <input type="text" class="form-control shadow-sm" disabled name="alamat" value="<?= $user['alamat']; ?>">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <label for="" class="mt-3">NIK</label>
                <input type="text" class="form-control shadow-sm" disabled name="nik" value="<?= $user['nik']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Agama</label>
                <input type="text" class="form-control shadow-sm" disabled name="agama" value="<?= $user['agama']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Jenis Kelamin</label>
                <input type="text" class="form-control shadow-sm" disabled name="gender" value="<?= $user['gender']; ?>">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-2 mt-2">
                <div class="d-grid">
                    <a href="index.php?page=Useredit&id=<?= $id; ?>" class='btn btn-success text-white shadow-sm'>Edit</a>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="d-grid">
                    <button type="button" class="btn btn-danger shadow" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
                </div>
            </div>
            <div class="col-md-2 mt-2">
                <div class="d-grid">
                    <a href="index.php?page=Userlist" class='btn btn-secondary text-white shadow-sm'>Kembali</a>
                </div>
            </div>
        </div>

        <!-- Modal untuk hapus -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= $user['nama']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Apakah yakin ingin user ini dihapus?</h5>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <a href="index.php?page=Userdelete&id=<?= $id; ?>" class="btn btn-primary shadow">Yakin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</main>