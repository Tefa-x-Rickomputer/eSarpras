<?php
	
	require 'config/connect.php';
    // $buku = querySql ("SELECT  * FROM tbuku WHERE isDeleted=0");
    $barang = querySql("SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");

     $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$barang[linkRuangan]' "); 
    $ruangan = (mysqli_fetch_assoc($query));


	$content = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Barang</title>
</head>
<body>
	 <img src=Assets/img/kopsuratsmk2n.png alt="Logo SMKN 2" width="100%" >
	<h2 align="center">LAPORAN DAFTAR BARANG</h1>
	<table border="1" cellpadding="10" cellspacing="0">
	   <tr>
           <th>No</th>
           <th>Nama Barang</th>
           <th>Merk Baarang</th>
           <th>Nomor Register</th>
           <th>Tipe Barang</th>
           <th>Harga Satuan</th>
           <th>Tahun pembelian</th>
           <th>Sumber Dana</th>
           <th>Kondisi Barang</th>
           <th>Ruangan</th>
       </tr>

       <footer>znjcjshsjdsdssdddssgsg</footer>';

       $count = 1;
       foreach ($barang as $item) {
       	$content .= '<tr>
       				<td>'. $count .'</td>
       				<td>'. $item["namaBarang"] .'</td>
       				<td>'. $item["merkBarang"] .'</td>
       				<td>'. $item["nomorRegister"] .'</td>
       				<td>'. $item["tipeBarang"] .'</td>
       				<td>'. $item["hargaSatuan"] .'</td>
       				<td>'. $item["tahunPembelian"] .'</td>
       				<td>'. $item["sumberDana"] .'</td>
       				<td>'. $item["kondisiBarang"] .'</td>
       				<td>'. $item["namaRuangan"] .'</td>
       	</tr>';
       	$count++;
       }
        
     $content .= '</table>

</body>
</html>'; 

	require_once "./contents/Buku/vendor/autoload.php";
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->AddPage("L","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($content);
	$mpdf->Output('Laporan-daftar-barang.pdf', 'I');
?>



	
