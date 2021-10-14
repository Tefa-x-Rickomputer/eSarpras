<?php
require '../connect.php';
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
// $sheet->setCellValue()->getColumnDimension('A1', 'No')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('B1', 'Judul Buku')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('C1', 'Nomor ISBN/ISSN')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('D1', 'Nomor Register')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('E1', 'Pengarang')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('F1', 'Penerbit')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('G1', 'Tahun Terbit')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('H1', 'Tahun Pembelian')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('I1', 'Jumlah Halaman')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('J1', 'Harga Buku')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('K1', 'Sumber Dana')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('L1', 'Kondisi')->setWidth(12);
// $spreadsheet->getActiveSheet()->getColumnDimension('M1', 'Ruangan')->setWidth(12);

$sheet->setCellValue ('A1', 'No');
$sheet->setCellValue ('B1', 'Judul Buku');
$sheet->setCellValue('C1', 'Nomor ISBN/ISSN');
$sheet->setCellValue('D1', 'Nomor Register');
$sheet->setCellValue('E1', 'Pengarang');
$sheet->setCellValue('F1', 'Penerbit');
$sheet->setCellValue('G1', 'Tahun Terbit');
$sheet->setCellValue('H1', 'Tahun Pembelian');
$sheet->setCellValue('I1', 'Jumlah Halaman');
$sheet->setCellValue('J1', 'Harga Buku');
$sheet->setCellValue('K1', 'Sumber Dana');
$sheet->setCellValue('L1', 'Kondisi');
$sheet->setCellValue('M1', 'Ruangan');
 
$query = mysqli_query($db, "SELECT tbuku.*, truangan.namaRuangan FROM tbuku LEFT JOIN truangan ON truangan.idRuangan = tbuku.linkRuangan  WHERE tbuku.isDeleted=0");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['judulBuku']);
	$sheet->setCellValue('C'.$i, $row['nomorBuku']);
	$sheet->setCellValue('D'.$i, $row['nomorRegister']);
	$sheet->setCellValue('E'.$i, $row['pengarang']);
	$sheet->setCellValue('F'.$i, $row['penerbit']);
	$sheet->setCellValue('G'.$i, $row['tahunTerbit']);
	$sheet->setCellValue('H'.$i, $row['tahunPembelian']);
	$sheet->setCellValue('I'.$i, $row['jumlahHalaman']);
	$sheet->setCellValue('J'.$i, $row['hargaBuku']);
	$sheet->setCellValue('K'.$i, $row['sumberDana']);
	$sheet->setCellValue('L'.$i, $row['kondisiBuku']);	
	$sheet->setCellValue('M'.$i, $row['namaRuangan']);	
	$i++;
}
 
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:M'.$i)->applyFromArray($styleArray);
  
 
$writer = new Xlsx($spreadsheet);
$writer->save('Laporan Data Buku.xlsx');
?>