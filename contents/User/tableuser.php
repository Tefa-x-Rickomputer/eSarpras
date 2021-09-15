<?php 
    require 'config/userfunctions.php';
    $users = query('SELECT * FROM tuser');
 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar User</li>
        </ol>
        
        <table class="table caption-top table-striped">
            <caption>Daftar User</caption>
            <thead class="table-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Status</th>
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
            			<td class="text-center">
            				<a href="index.php?page=UserDetail&id=<?= $user['idUser']; ?>" class="btn btn-success">Detail</a>
            			</td>
            		</tr>
                    <?php $count++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>