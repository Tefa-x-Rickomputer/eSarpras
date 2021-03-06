<?php
require '../connect.php';
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$spreadsheet->getActiveSheet()->getStyle('J')->getNumberFormat()
->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_ACCOUNTING_USD);

$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(5, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(50, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(40, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(40, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(20, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(20, 'px');


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
  
$file = "Laporan Data Buku.xlsx";
$writer = new Xlsx($spreadsheet);

 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$file.'"');
$writer->save("php://output");
?>