<?php 
    
    outAdminGuest();

    require 'config/userfunctions.php';
    $users = query('SELECT * FROM tuser WHERE isDeleted = 0');
 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Daftar User</h1>
        
        <div class="mb-5">
            <table id="example" class="display nowrap caption-top table-striped table" style="width:100%">
                <caption></caption>
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jabatan</th>
                        <th>Role</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>

                <tbody class="">
                    <?php $count = 1; ?>
                    <?php foreach($users as $user) : ?>
                		<tr>
                			<td class="text-center"><?= $count; ?></td>
                			<td><?= $user['nama']; ?></td>
                            <td><?= $user['nik']; ?></td>
                			<td><?= $user['status']; ?></td>
                            <td><?= $user['role']; ?></td>
                			<td class="text-center">
                				<a href="index.php?page=UserDetail&id=<?= $user['idUser']; ?>" class="btn btn-success"><i class="bi bi-eye"></i> Detail</a>
                			</td>
                		</tr>
                        <?php $count++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>