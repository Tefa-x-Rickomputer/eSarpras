<?php 
    include 'config/bukufunctions.php';
    $id = $_GET['id'];

    $buku = query("SELECT * FROM tbuku WHERE idBuku = $id")[0];

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$buku[linkRuangan]'"); 
    $ruangan = (mysqli_fetch_assoc($query));

    if( isset($_POST['edit']) ) { 
        if( edit($_POST) > 0 ) {
            echo "<script>
                    alert('data berhasil di update');
                    document.location.href = 'index.php?page=EditBuku&id=$id';
                </script>";
        } else {
            echo "<script>
                    alert('data gagal di update');
                   
                </script>";
        }
    }
?>


<main>
	<div class="container-fluid">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1>Edit Buku</h1>
            </div>    
        </div>

		<div class="row mt-3 mb-5 card-user">
			<div class="col-md-4 col-xs-12 mt-3">
                <div class="shadow">
                    <div class="card card-primary">
                        <div class="text-center">
                            <img src=Assets/img/buku/<?= $buku['fotoBuku'] ?> alt="Foto Buku" width="50%"  >
                        </div>

                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item mt-2">
                            <b>Judul Buku</b>
                            <div class="float-end"><p><?= $buku['judulBuku']; ?></p></div>
                        </li>
                        <li class="list-group-item mt-2">
                            <b>Nomor Buku</b>
                            <div class="float-end"><?= $buku['nomorBuku']; ?></div>
                        </li>
                    </ul>
                </div>

            </div>


            <div class="col-md-8 col-xs-12 mt-3">

                <form action="" method="POST" enctype="multipart/form-data">
                <div class="card p-3 pt-1 shadow">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Judul Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="hidden" name="idBuku" value="<?= $buku['idBuku']; ?>">
                            <input type="hidden" name="fotoLama" value="<?= $buku['fotoBuku']; ?>">
                            <input type="text" class="form-control mt-3" name="judulBuku"  value="<?= $buku['judulBuku']; ?>"> 
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Nomor Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="nomorBuku" value="<?= $buku['nomorBuku']; ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Pengarang</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="pengarang" value="<?= $buku['pengarang']; ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Penerbit</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="penerbit" value="<?= $buku['penerbit']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Tahun Terbit</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-3" name="tahunTerbit" value="<?= $buku['tahunTerbit']; ?>">
                        </div>
                    </div>

                      <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Jumlah Halaman</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="jumlahHalaman" value="<?= $buku['jumlahHalaman']; ?>">
                        </div>
                    </div>

                     <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Nomor Register</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-3" name="nomorRegister" value="<?= $buku['nomorRegister']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Tahun Pembelian</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control mt-3" name="tahunPembelian" value="<?= $buku['tahunPembelian']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Harga Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control mt-3" name="hargaBuku" value="<?= $buku['hargaBuku']; ?>">
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="sumberDana" class="fw-bold fs-5 mt-3">Sumber Dana</label>
                        </div>
                        <div class="col-sm-5">
                             <select id="" name="sumberDana" class="form-select mt-3">
                               <?php if ($buku['sumberDana'] == 'BOS') : ?>
                                <option value="BOS" selected>BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            <?php else : ?>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA" selected>BOSDA</option>
                            <?php endif; ?>
                            </select>
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Kondisi</label>
                        </div>
                        <div class="col-sm-5">
                        <select id="" name="kondisiBuku" class="form-select mt-3">
                            <?php if ($ruangan['kondisiBuku'] == 'Baik') : ?>
                                <option value="Baik" selected>Baru</option>
                                <option value="Rusak">Rusak</option>
                            <?php else : ?>
                                <option value="Baik">Baru</option>
                                <option value="Rusak" selected>Rusak</option>
                            <?php endif; ?>
                            </select>
                        </div>
                    </div>

                         <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Ruangan</label>
                        </div>
                        <div class="col-sm-5">
                            <select id="" name="linkRuangan" va class="form-select mt-3">

                            <?php if ($ruangan['idRuangan'] == '1') : ?>
                                <option value="1" selected>RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                            <?php elseif ($ruangan['idRuangan'] == '2') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2" selected>RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                            <?php elseif ($ruangan['idRuangan'] == '3') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3" selected>RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                          <?php elseif ($ruangan['idRuangan'] == '4') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4" selected>RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6">Perpustakaan</option>
                          <?php elseif ($ruangan['idRuangan'] == '5') : ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5" selected>RPS 5</option>
                                <option value="6">Perpustakaan</option>
                          <?php else : ($ruangan['idRuangan'] == '6') ?>
                                 <option value="1">RPS 1</option>
                                <option value="2">RPS 2</option>
                                <option value="3">RPS 3</option>
                                <option value="4">RPS 4</option>
                                <option value="5">RPS 5</option>
                                <option value="6" selected>Perpustakaan</option>
                            <?php endif; ?>
                            </select>

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label for="" class="fw-bold fs-5 mt-3">Foto Buku</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="file" name="fotoBuku" class="form-control mt-3"  id="formFile">
                        </div>
                    </div>

                </div>
                    
            </div>

        </div>

        <div class="row mb-5 text-center">
            <div class="col">
              <button type="submit" name="edit" class="btn btn-success">Update</button>
              
              </form>
        </div>
    
	</div>
  

</main>