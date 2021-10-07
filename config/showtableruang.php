<?php 
    require 'config/userfunctions.php';
    $users = query('SELECT * FROM truangan WHERE isDeleted = 0');
 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="col mx-auto">Daftar Ruangan</h1>
        
        <div class="mb-5 mt-3">
            <table id="example" class="display nowrap table-striped table text-center" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Ruangan</th>
                        <th class="<?=eclGuest?>">Opsi</th>
                    </tr>
                </thead>

                <tbody class="">
                    <?php $count = 1; ?>
                    <?php foreach($users as $user) : ?>
                		<tr>
                			<td><?= $count; ?></td>
                            <td><?= $user['namaRuangan']; ?></td>
                			
                			<td class="text-center <?=eclGuest?>">
                				
                                    <a href="config/edit.php?idRuangan=<?= $user['idRuangan']; ?>" class="btn btn-success shadow">Edit</a>
                                    <a href="config/hapus.php?idRuangan=<?= $user['idRuangan']; ?>" class="btn btn-danger shadow bi bi-trash-fill" onclick="return confirm('apakah yakin akan dihapus?')"></a>
                               
                			</td>
                		</tr>
            <?php $count++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
	

    <form method ="post" action ="config/simpan.php" >
        <div class="container overflow-hidden">
            <!-- <div class="row gx-5 ms-5">
                <div class="col">
                    <div class="p-3 border bg-light">
                        <div class="input-group">
                            <span class="input-group-text">Tambah Ruangan</span>
                            <input type="text" aria-label="Last name" name ="namaRuangan" class="form-control">
                            <button type="submit" name ="simpan" class="btn btn-primary mb-3">Simpan</button>                        
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mt-3">
                         
                    </div>
                </div>
            </div> -->
            <div class="row <?=eclGuest?>">
                <div class="col-md-5 mx-auto">
                    <div class="input-group mb-5 shadow">
                        <span class="input-group-text">Tambah Ruangan</span>
                        <input type="text" aria-label="Last name" name ="namaRuangan" class="form-control">
                        <button type="submit" name ="simpan" class="btn btn-primary">Simpan</button>                        
                    </div>
                </div>
            </div>
        </div>
    </form>

</main>
