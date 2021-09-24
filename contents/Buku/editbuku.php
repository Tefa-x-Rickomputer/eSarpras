<?php 

    outGuest();

    include 'config/bukufunctions.php';
    $id = $_GET['id'];

    $buku = query("SELECT * FROM tbuku WHERE idBuku = $id")[0];

    $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$buku[linkRuangan]'"); 
    $ruangan = (mysqli_fetch_assoc($query));

    if( isset($_POST['edit']) ) { 
        if( edit($_POST) > 0 ) {
            echo "<script>
                    alert('data berhasil di update');
                    document.location.href = 'index.php?page=DetailBuku&id=$id';
                </script>";
        } else {
            echo "<script>
             alert('data gagal di update');
                   
                </script>";
        }
    }
?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Edit Buku</h1>
    <div class="row">
        <div class="col-md-4">
        </div>
             <form action="" method="POST" enctype="multipart/form-data">
         <div class="row mt-3">
        <div class="col-md">
            <label for="judulBuku">Judul</label>
            <input type="hidden" name="idBuku" value="<?= $buku['idBuku']; ?>">
             <input type="hidden" name="fotoLama" value="<?= $buku['fotoBuku']; ?>">
            <input type="text" class="form-control mt-1" id="disabledInput" name="judulBuku" value="<?= $buku['judulBuku'] ?>">
        </div>
            <div class="col-md">
            <label for="nomorBuku">Nomor Buku</label>
            <input type="text" class="form-control  mt-1" id="disabledInput" name="nomorBuku" value="<?= $buku['nomorBuku'] ?>">
        </div>
            <div class="col-md">
            <label for="nomorRegister">Nomor Register</label>
            <input type="text" class="form-control  mt-1" id="disabledInput" name="nomorRegister" value="<?= $buku['nomorRegister'] ?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md">
            <label for="">Pengarang</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="pengarang" value="<?= $buku['pengarang'] ?>">
        </div>
        <div class="col-md">
            <label for="">Penerbit</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="penerbit" value="<?= $buku['penerbit'] ?>">
        </div>
        <div class="col-md ">
            <label for="">Tahun Terbit</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="tahunTerbit" value="<?= $buku['tahunTerbit'] ?>">
        </div>
    </div>

      
    <div class="row ">
           <div class="col-md mt-3">
             <label for="">Tahun Pembelian</label>
             <input type="text" class="form-control mt-1" id="disabledInput" name="tahunPembelian" value="<?= $buku['tahunPembelian'] ?>">
        </div>
        <div class="col-md mt-3">
            <label for="">Jumlah Halaman</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="jumlahHalaman" value="<?= $buku['jumlahHalaman'] ?>">
        </div>
        
        <div class="col-md mt-3">
            <label for="">Harga Buku</label>
            <input type="text" class="form-control mt-1" id="disabledInput" name="hargaBuku" value="<?= $buku['hargaBuku'] ?>">
        </div>
    </div>

        <div class="row mb">
           <div class="col-md mt-3">
             <label for="">Sumber Dana</label>
            <select id="" name="sumberDana" class="form-select">
                               <?php if ($buku['sumberDana'] == 'BOS') : ?>
                                <option value="BOS" selected>BOS</option>
                                <option value="BOSDA">BOSDA</option>
                            <?php else : ?>
                                <option value="BOS">BOS</option>
                                <option value="BOSDA" selected>BOSDA</option>
                            <?php endif; ?>
                            </select>
        </div>
         <div class="col-md mt-3">
             <label for="">Kondisi Buku</label>
             <select id="" name="kondisiBuku" class="form-select">
                            <?php if ($ruangan['kondisiBuku'] == 'Baik') : ?>
                                <option value="Baik" selected>Baru</option>
                                <option value="Rusak">Rusak</option>
                            <?php else : ?>
                                <option value="Baik">Baru</option>
                                <option value="Rusak" selected>Rusak</option>
                            <?php endif; ?>
                            </select>
        </div>
         <div class="col-md mt-3">
             <label for="">Ruangan</label>
              <select id="" name="linkRuangan" va class="form-select">
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

 <div class="row mb-3">
           <div class="col-md mt-3">
             <label for="">Upload Foto</label>
             <input type="file" class="form-control mt-1" id="disabledInput" name="fotoBuku">
        </div>
    </div>

        <div class="mt-4">

                       <button type="submit" name="edit" class="btn btn-success">Update</button>
                   <a href="index.php?page=DetailBuku&id=<?php echo $buku['idBuku']; ?>"class="btn btn-danger">Batal</a>
                </div>
                </form>
            </div>
        </div>
  </div>
</main>
