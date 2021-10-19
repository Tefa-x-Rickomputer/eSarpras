<?php 
    
    outAdminGuest();
    require 'config/pemberitahuanfunctions.php';
  
    if (isset($_POST['hapus'])) {
        $id = $_GET['id'];

        if ( deletePemberitahuan($id) > 0 ) {
        	echo "<script>
                        alert('data berhasil di hapus');
                        document.location.href = 'index.php?page=DaftarPemberitahuan'; 
                    </script>";
        } else {
            echo "<script>
                    alert('data berhasil di hapus');
                    document.location.href = 'index.php?page=DaftarPemberitahuan'; 
                </script>";
        }        
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Daftar Pemberitahuan</h1>
        
        <?php 
            if (isset($_POST['submit']) ) {
                if( addPemberitahuan($_POST) > 0 ) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><i class='bi bi-check-circle'></i><span class='ms-3'>Pemberitahuan berhasil diumumkan!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>
                            <script>
                                setTimeout(function() {
                                        document.location.href = 'index.php?page=DaftarPemberitahuan';
                                    }, 1500)
                            </script>";
                } else {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Pemberitahuan gagal diumumkan!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";    
                }
            }
        ?>

        <div class="mb-3">
            <table id="example" class="display wrap table-striped table shadow-sm" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Isi</th>
                        <th>Pembuat</th>
                        <th>Waktu</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php $count = 1; ?>
                    <?php foreach($notices as $notice) : ?>
                      
                		<tr>
                			<td class="text-center"><?= $count; ?></td>
                            <td><?= $notice['isiPemberitahuan']; ?></td>
                            <?php
                            $linkUser = $notice['linkUser'];
                            $query = mysqli_query($db, "SELECT * FROM tuser WHERE idUser = $linkUser"); 
                            $pembuat = mysqli_fetch_assoc($query);
                            ?>
                            <td><?= $pembuat['nama'];?></td>
                			<td><?= $notice['waktuPemberitahuan']; ?></td>
                			<td class="text-center">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <a href="index.php?page=HapusPemberitahuan&id=<?= $notice['idPemberitahuan']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus pemberitahuan ini?')" class="btn btn-danger bi bi-trash-fill"></a>
                                </form>
                                <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Peringatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Apakah anda yakin ingin menghapus pemberitahuan ini?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a type="button" class="btn btn-primary" href="index.php?page=HapusPemberitahuan&id=<?= $notice['idPemberitahuan']; ?>">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                            </td>
                		</tr>
                        <?php $count++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php 
           if (isset($_POST["hapusPbr"]))
           {
               echo $_POST["hapusPbr"];
           }
        ?>
        <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Pemberitahuan
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Silahkan tulis pemberitahuan yang ingin diumukan.</p>
                <form action="" method="post" enctype="multipart/form-data">
                <textarea type="text" class="form-control" name="isiPemberitahuan" enctype="multipart/form-data" rows="5" required></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="submit" class="btn btn-primary">Umumkan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>


<script>
    const hapusbutton = document.querySelector('#hapusbutton');
    hapusbutton.addEventListener('click', function() {
        const tr = document.querySelector('tbody tr');
        const td = tr.querySelector('td:nth-child(1)').textContent;
        console.log(td);
    })
</script>