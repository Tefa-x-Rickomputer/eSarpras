<?php 
    require 'config/userfunctions.php';
    $users = query('SELECT * FROM truangan WHERE isDeleted = 0');
 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Daftar Ruangan</h1>
        
        <div class="mb-5">
            <table id="example" class="display nowrap table-striped table" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">ID RUANGAN</th>
                        <th>NAMA RUANGAN</th>
                        <th>OPSI</th>
                    </tr>
                </thead>

                <tbody class="">
                    
                    <?php foreach($users as $user) : ?>
                		<tr>
                			
                			<td><?= $user['idRuangan']; ?></td>
                            <td><?= $user['namaRuangan']; ?></td>
                			
                			<td class="text-center">
                				
                                <a href="config/hapus.php?idRuangan=<?= $user['idRuangan']; ?>" class="btn btn-danger shadow" onclick="return confirm('apakah yakin akan dihapus?')">Hapus</a>
								<a href="config/edit.php?idRuangan=<?= $user['idRuangan']; ?>" class="btn btn-warning shadow">Edit</a>
								
                			
                			</td>
                		</tr>
                      
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
	

    <form method ="post" action ="config/simpan.php" >
        <div class="container overflow-hidden">
            <div class="row gx-5 ms-5">
                <div class="col">
                    <div class="p-3 border bg-light">
                        <div class="input-group">
                            <span class="input-group-text">Tambah Ruangan</span>
                            <input type="text" aria-label="Last name" name ="namaRuangan" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                         <button type="submit" name ="simpan" class="btn btn-primary mb-3">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</main>
