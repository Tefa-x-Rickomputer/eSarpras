<?php

include 'connect.php';
$tabel = 'SELECT idRuangan, namaRuangan
		FROM truangan WHERE isDeleted=0';

$query = mysqli_query($db, $tabel);
		




echo '<table id="example" class="table caption-top table-striped text-center" class="display nowrap table-striped table-bordered table" style="width:100%">
<caption>Daftar Ruangan</caption>
		   <thead class="table-dark">
		
			<tr>
				<th>ID RUANGAN</th>
				<th>NAMA RUANGAN</th>
				
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['idRuangan'].'</td>
			<td>'.$row['namaRuangan'].'</td>
			
		</tr>';
}
echo '
	</tbody>
</table>';

// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($db);
?>