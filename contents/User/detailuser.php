<?php 
    include 'config/userfunctions.php';
    $id = $_GET['id'];
    $user = query("SELECT * FROM tuser WHERE idUser = $id")[0];
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Detail User</h1>

        <div class="row">
            <div class="col-md-4 mt-3 shadow-sm">
                <div class="text-center">
                    <!-- <i class="bi bi-person-fill" style="font-size:10rem;"></i> -->
                    <img class="profile-photo" src="Assets/img/user/<?= $user['fotoProfil'] ?>" alt="Foto Profil" style="width: 96px;">
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
                <label for="" class="mt-3">Nik</label>
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
            <div class="col-md-2 mx-auto">
                <div class="d-grid">
                    <a href="index.php?page=Useredit&id=<?= $userSession['idUser']; ?>" class='btn btn-warning text-white shadow-sm'>Edit</a>
                </div>
            </div>
        </div>
    </div>

    
</main>