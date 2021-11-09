<?php 
    
    outAdminGuest();
  
	require_once 'config/connect.php';
    
	$loginlogs = mysqli_query($db, "SELECT * FROM tloginlog");
    $userlog = mysqli_fetch_assoc($loginlogs);
    
    function query($query) {
		global $db;
		$result = mysqli_query($db, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Riwayat Pengguna</h1>

        <div class="mb-3">
            <table id="example" class="display wrap table-striped table shadow-sm" style="width:100%">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Alamat IP</th>
                        <th>Device</th>
                        <th>Waktu Login</th>
                        <th>Waktu Logout</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php $count = 1; ?>
                    <?php foreach($loginlogs as $loginlog) : ?>
                		<tr>
                			<td class="text-center"><?= $count; ?></td>
                            <?php
                            $linkUser = $loginlog['linkUser'];
                            $query = mysqli_query($db, "SELECT * FROM tuser WHERE idUser = $linkUser"); 
                            $namelog = mysqli_fetch_assoc($query);
                            ?>
                            <td><?= $namelog['nama'];?></td>
                            <td><?= $loginlog['ipUser']; ?></td>
                			<td><?= $loginlog['agenUser']; ?></td>
                            <td><?= $loginlog['waktuLogin']; ?></td>
                            <td><?= $loginlog['waktuLogout']; ?></td>
                		</tr>
                        <?php $count++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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