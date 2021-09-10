<?php 
	
	$datatemp = [
		['nama'=>'luthfi', 'status'=>'admin'],
		['nama'=>'sayu', 'status'=>'admin'],
		['nama'=>'lisa', 'status'=>'admin'],
		['nama'=>'jean', 'status'=>'admin'],
		['nama'=>'ei', 'status'=>'admin']
	]

 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar User</li>
        </ol>
        
        <table class="table caption-top table-striped text-center">
            <caption>Daftar User</caption>
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>

            <tbody class="">
            	<?php $count = 1; ?>
            	<?php foreach($datatemp as $data) : ?>
            		<tr>
            			<td><?= $count; ?></td>
            			<td><?= $data['nama']; ?></td>
            			<td><?= $data['status']; ?></td>
            			<td>
            				<a href="index.php?page=UserDetail" class="btn btn-success">Detail</a>
            			</td>
            		</tr>
            		<?php $count++ ?>
            	<?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>