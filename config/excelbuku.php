<?php

	require 'connect.php';
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Buku.xls");
	?>

	

	<table border="1">
		<tr>
			<th width="50" class="text-md-center align-middle">No</th>
                    <th width="500" class=" align-middle">Judul Buku</th>
                    <th width="200" class=" align-middle">Nomor ISBN/ISSN</th>
                    <th width="200" class=" align-middle">Nomor Register</th>
                    <th width="200" class=" align-middle">Pengarang</th>
                    <th width="200" class=" align-middle">Penerbit</th>
                    <th width="100" class=" align-middle">Tahun Terbit</th>
                    <th width="100" class=" align-middle">Tahun Pembelian</th>
                    <th width="100" class=" align-middle">Jumlah Halaman</th>
                    <th width="200" class=" align-middle">Harga Buku</th>
                    <th width="150" class=" align-middle">Sumber Dana</th>
                    <th width="100" class=" align-middle">Kondisi</th>
                    <th width="150" class=" align-middle">Ruangan</th>
		</tr>
		<?php 
		// koneksi database
		

		// menampilkan data pegawai
		$item = mysqli_query($db, "SELECT tbuku.*, truangan.namaRuangan FROM tbuku LEFT JOIN truangan ON truangan.idRuangan = tbuku.linkRuangan  WHERE tbuku.isDeleted=0");
		$no = 1;
		while($d = mysqli_fetch_array($item)){
		?>
		<tr>
			<td class="text-center"><?php echo $no++; ?></td>p
			<td><?php echo $d['judulBuku']; ?></td>
			<td><?php echo $d['nomorBuku']; ?></td>
			<td><?php echo $d['nomorRegister']; ?></td>
            <td><?php echo $d['pengarang']; ?></td>
            <td><?php echo $d['penerbit']; ?></td>
            <td><?php echo $d['tahunTerbit']; ?></td>
            <td><?php echo $d['tahunPembelian']; ?></td>
            <td><?php echo $d['jumlahHalaman']; ?></td>
            <td>Rp. <?php echo $d['hargaBuku']; ?></td>
            <td><?php echo $d['sumberDana']; ?></td>
            <td><?php echo $d['kondisiBuku']; ?></td>
            <td><?php echo $d['namaRuangan']; ?></td>
		</tr>
		<?php 
		}
		?>