<?php

	require 'connect.php';
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Sarpras.xls");
	?>

	

	<table border="1">
		<tr>
			<th width="50" class="text-md-center align-middle">No</th>
                    <th width="500" class=" align-middle">Nama Sarpras</th>
                    <th width="200" class=" align-middle">Merk Sarpras</th>
                    <th width="200" class=" align-middle">Nomor Register</th>
                    <th width="200" class=" align-middle">Tipe Sarpras</th>
                    <th width="200" class=" align-middle">Harga Satuan</th>
                    <th width="100" class=" align-middle">Tahun Pembelian</th>
                    <th width="100" class=" align-middle">Sumber Dana</th>
                    <th width="100" class=" align-middle">Kondisi</th>
                    <th width="150" class=" align-middle">Ruangan</th>
		</tr>
		<?php 
		// koneksi database
		

		// menampilkan data pegawai
		$item = mysqli_query($db, "SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");
		$no = 1;
		while($d = mysqli_fetch_array($item)){
		?>
		<tr>
			<td class="text-center"><?php echo $no++; ?></td>
			<td><?php echo $d['namaBarang']; ?></td>
			<td><?php echo $d['merkBarang']; ?></td>
			<td><?php echo $d['nomorRegister']; ?></td>
            <td><?php echo $d['tipeBarang']; ?></td>
            <?php $nilai = $d['hargaSatuan']; ?>
            <?php $harga = number_format($nilai,0,',','.'); ?>
            <td>Rp. <?php echo $harga ?></td>
            <td><?php echo $d['tahunPembelian']; ?></td>
            <td><?php echo $d['sumberDana']; ?></td>
            <td><?php echo $d['kondisiBarang']; ?></td>
            <td><?php echo $d['namaRuangan']; ?></td>
		</tr>
		<?php 
		}
		?>