<?php 
    include 'config/userfunctions.php';
    $id = $userSession['idUser'];
    $user = query("SELECT * FROM tuser WHERE idUser = $id")[0];
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Profile</h1>

        <div class="row">

            <div class="col-md-4 mt-3">
                <div class="text-center border rounded position-relative" style="background-color:rgb(233,236,239);height:14.3rem; max-width:22rem;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img class="img img-thumbnail" src="Assets/img/user/<?= $user['fotoProfil'] ?>" alt="Foto Profil" style="margin:auto; height:13.3rem; max-width:21rem;">
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
                    <a href="index.php?page=Profileedit" class='btn btn-success text-white shadow-sm'>Edit</a>
                </div>
            </div>
        </div>
    </div>

    
</main>