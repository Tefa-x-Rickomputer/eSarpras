<?php 

    require 'config/userfunctions.php';


    if ( isset($_POST['submit']) ) {
        // echo $username . $password . $role . $nama . $nik . $tanggalLahir . $email . $telpon . $alamat . $status . $agama . $gender . $fotoProfil;
        if( adduser($_POST) > 0 ) {
            echo "<script>
                    alert('data berhasil di tambahkan');
                    //document.location.href = 'index.php?page=Userlist';
                </script>";
        } else {
            echo "data gagal ditambahkan";
        }
        
        // $namafile = $_FILES['fotoProfil']['name'];
        // $fileformat = ['png', 'jpeg', 'jpg', 'jfif'];
        // $namafileformat = explode('.', $namafile);
        // $namafileformat = strtolower(end($namafileformat));
        // if( !in_array($namafileformat, $fileformat) ) {
        //     echo "<script>
        //             alert('Harus berupa gambar!');
        //         </script>";
        // }
    }

 ?> 

<main>
	<div class="container-fluid">
        <h1 class="mt-4">Tambah User</h1>


    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">

         <div class="col-md mt-3">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>


       <div class="col-md mt-3">
           <label for="">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>

        <div class="col-md mt-3">
            <label for="">Role</label>
            <select name="role" class="form-select" id="" required>
                <option value="super">Super</option>
                <option value="admin">Admin</option>
                <option value="guest">Guest</option>
            </select>
        </div>

      </div>


      <div class="row">
        <div class="col-md mt-3">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="col-md mt-3">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="nik" required>
        </div>

          <div class="col-md mt-3">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggalLahir" required>
        </div>

      </div>

    <div class="row">
            <div class="col-md mt-3">
           <label for="">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>

          <div class="col-md mt-3">
            <label for="">No. Telp</label>
            <input type="text" class="form-control" name="telpon" required>
        </div>

        <div class="col-md mt-3">
            <label for="">Alamat</label>
          <input type="text" class="form-control" name="alamat" required>
        </div>
    </div> 


    <div class="row mb-3">
        <div class="col-md mt-3">
            <label for="">Status</label>
            <input type="text" class="form-control" name="status">
       </div>

        <div class="col-md mt-3">
            <label for="kondisiBuku">Agama</label>
            <select name="agama" id="" class="form-select" required>
                <option value="Islam">Islam</option>
                <option value="Krister">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>

        <div class="col-md mt-3">
            <label for="">Jenis Kelamin</label>
            <select name="gender" id="" class="form-select" required>
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="col-md mt-3">
            <label for="">Gambar</label>
            <input type="file" class="form-control" name="fotoProfil">      
        </div> 
    </div>

    <div class="row">
        <div class="col-md-2 mb-3">
            <div class="d-grid">
                <button class="btn btn-success" type="submit" name="submit">Simpan</button>
            </div>
        </div>
    </div>

    </form>
	</div>


</main>