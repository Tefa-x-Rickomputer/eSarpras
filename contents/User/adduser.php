<?php 

    require 'config/userfunctions.php';


    if ( isset($_POST['submit']) ) {
        // echo $username . $password . $role . $nama . $nik . $tanggalLahir . $email . $telpon . $alamat . $status . $agama . $gender . $fotoProfil;
        // if( adduser($_POST) > 0 ) {
        //     echo "<script>
        //             alert('data berhasil di tambahkan');
        //             //document.location.href = 'index.php?page=Userlist';
        //         </script>";
        // } else {
        //     echo "data gagal ditambahkan";
        // }
        var_dump($_FILES['fotoProfil']);
        $namafile = $_FILES['fotoProfil']['name'];
        $fileformat = ['png', 'jpeg', 'jpg', 'jfif'];
        $namafileformat = explode('.', $namafile);
        $namafileformat = strtolower(end($namafileformat));
        if( !in_array($namafileformat, $fileformat) ) {
            echo "<script>
                    alert('Harus berupa gambar!');
                </script>";
        }
    }

 ?> 

<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Tambah user</h1>
            </div>    
        </div>

    <form action="" method="POST" enctype="multipart/form-data">
		<div class="row mt-3 mb-5 card-user">
            <div class="col-md-8 mx-auto col-xs-12 mt-3">
                <div class="card p-3 pt-1 bg-light shadow">
                        
                        <!-- <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="username" class="fw-bold float-xl-end fs-5 mt-3">Username</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mt-3" name="username" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="password" class="fw-bold float-xl-end fs-5 mt-3">Password</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="password" class="form-control mt-3" name="password" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="role" class="fw-bold float-xl-end fs-5 mt-3">Role</label>
                            </div>
                            <div class="col-sm-5">
                                <select name="role" class="form-select mt-3" id="" required>
                                    <option value="super">Super</option>
                                    <option value="admin">Admin</option>
                                    <option value="guest">Guest</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="nama" class="fw-bold float-xl-end fs-5 mt-3">Nama</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mt-3" name="nama" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="nik" class="fw-bold float-xl-end fs-5 mt-3">NIK</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mt-3" name="nik" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="tanggalLahir" class="fw-bold float-xl-end fs-5 mt-3">Tanggal Lahir</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="date" class="form-control mt-3" name="tanggalLahir" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="email" class="fw-bold float-xl-end fs-5 mt-3">Email</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="email" class="form-control mt-3" name="email" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="telpon" class="fw-bold float-xl-end fs-5 mt-3">No. Telp</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mt-3" name="telpon" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="alamat" class="fw-bold float-xl-end fs-5 mt-3">Alamat</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mt-3" name="alamat" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="status" class="fw-bold float-xl-end fs-5 mt-3">Status</label>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control mt-3" name="status" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="agama" class="fw-bold float-xl-end fs-5 mt-3">Agama</label>
                            </div>
                            <div class="col-sm-5">
                                <select name="agama" id="" class="form-select mt-3" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Krister">Kristen</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="gender" class="fw-bold float-xl-end fs-5 mt-3">Jenis Kelamin</label>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-laki" checked>
                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div>
                        </div> -->

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label for="" class="fw-bold float-xl-end fs-5 mt-3">Foto Profile</label>
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control mt-3" type="file" name="fotoProfil" id="formFile">
                            </div>
                        </div>
                </div>
                    
            </div>

        </div>

        <div class="row mt-3 mb-5 ">
            <div class="col-md-2 mx-auto">
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
	</div>


</main>