<?php 
    include 'config/sessionmanager.php';
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Profile</h1>

        <div class="row">
            <div class="col-md-4 mt-3 shadow">
                <div class="text-center">
                    <!-- <i class="bi bi-person-fill" style="font-size:10rem;"></i> -->
                    <img class="profile-photo" src="Assets/img/user/<?= $userSession['fotoProfil'] ?>" alt="Foto Profil" style="width: 96px;">
                </div>
            </div>

            <div class="col-md">
                <label for="" class="mt-3">Nama</label>
                <input type="text" class="form-control shadow" disabled name="nama" value="<?= $userSession['nama']; ?>">

                <label for="" class="mt-3">Jabatan</label>
                <input type="text" class="form-control shadow" disabled name="status" value="<?= $userSession['status']; ?>">

                <label for="" class="mt-3">Hak Akses</label>
                <input type="text" class="form-control shadow" disabled name="role" value="<?= $userSession['role']; ?>">
            </div>

        </div>

        <div class="row">
            <div class="col-md">
                <label for="" class="mt-3">Email</label>
                <input type="text" class="form-control shadow" disabled name="email" value="<?= $userSession['email']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Nomor Telpon</label>
                <input type="text" class="form-control shadow" disabled name="telpon" value="<?= $userSession['telpon']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Alamat</label>
                <input type="text" class="form-control shadow" disabled name="alamat" value="<?= $userSession['alamat']; ?>">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <label for="" class="mt-3">Nik</label>
                <input type="text" class="form-control shadow" disabled name="nik" value="<?= $userSession['nik']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Agama</label>
                <input type="text" class="form-control shadow" disabled name="agama" value="<?= $userSession['agama']; ?>">
            </div>
            <div class="col-md">
                <label for="" class="mt-3">Jenis Kelamin</label>
                <input type="text" class="form-control shadow" disabled name="gender" value="<?= $userSession['gender']; ?>">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-2 mx-auto">
                <div class="d-grid">
                    <a href="index.php?page=Useredit&id=<?= $userSession['idUser']; ?>" class='btn btn-warning text-white shadow'>Edit</a>
                </div>
            </div>
        </div>
    </div>

    
</main>