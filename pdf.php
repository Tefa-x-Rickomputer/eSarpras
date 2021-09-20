<?php
	
	require 'config/connect.php';
    // $buku = querySql ("SELECT  * FROM tbuku WHERE isDeleted=0");
    $buku = querySql("SELECT tbuku.*, truangan.namaRuangan FROM tbuku LEFT JOIN truangan ON truangan.idRuangan = tbuku.linkRuangan  WHERE tbuku.isDeleted=0");

     $query = mysqli_query($db, "SELECT * FROM truangan WHERE idRuangan = '$buku[linkRuangan]' "); 
    $ruangan = (mysqli_fetch_assoc($query));


	$content = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Buku</title>
</head>
<body>
	 <img src=Assets/img/kopsuratsmk2n.png alt="Logo SMKN 2" width="100%" >
	<h2 align="center">LAPORAN DAFTAR BUKU</h1>
	<table border="1" cellpadding="10" cellspacing="0">
	   <tr>
           <th>No</th>
           <th>Judul Buku</th>
           <th>Nomor Buku</th>
           <th>Pengarang</th>
           <th>Penerbit</th>
           <th>Tahun Terbit</th>
           <th>Jumlah Halaman</th>
           <th>Nomor Register</th>
           <th>Tahun pembelian</th>
           <th>Harga Buku</th>
           <th>Sumber Dana</th>
           <th>Kondisi Buku</th>
           <th>Ruangan</th>
       </tr>';

       $count = 1;
       foreach ($buku as $item) {
       	$content .= '<tr>
       				<td>'. $count .'</td>
       				<td>'. $item["judulBuku"] .'</td>
       				<td>'. $item["nomorBuku"] .'</td>
       				<td>'. $item["pengarang"] .'</td>
       				<td>'. $item["penerbit"] .'</td>
       				<td>'. $item["tahunTerbit"] .'</td>
       				<td>'. $item["jumlahHalaman"] .'</td>
       				<td>'. $item["nomorRegister"] .'</td>
       				<td>'. $item["tahunPembelian"] .'</td>
       				<td>'. $item["hargaBuku"] .'</td>
       				<td>'. $item["sumberDana"] .'</td>
       				<td>'. $item["kondisiBuku"] .'</td>
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
	$mpdf->Output('Laporan-daftar-buku.pdf', 'I');
?>



	
