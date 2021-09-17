<?php 
    require 'config/userfunctions.php';
<<<<<<< HEAD
    $users = query('SELECT * FROM tuser WHERE isDeleted = 0');
=======
    $users = query('SELECT * FROM tuser');
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
 ?>

<main>
    <div class="container-fluid px-4">
<<<<<<< HEAD
        <h1 class="mt-4 mb-5">Daftar User</h1>
        
        <table id="example" class="display nowrap table-striped table" style="width:100%">
=======
        <h1 class="mt-4">Daftar User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar User</li>
        </ol>
        
        <table class="table caption-top table-striped">
            <caption>Daftar User</caption>
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
            <thead class="table-dark">
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Status</th>
<<<<<<< HEAD
                    <th>Role</th>
=======
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
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
<<<<<<< HEAD
                        <td><?= $user['role']; ?></td>
=======
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a
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