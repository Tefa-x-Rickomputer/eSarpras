<?php
require 'connect.php';
require 'excel/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$spreadsheet->getActiveSheet()->getStyle('F')->getNumberFormat()
->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_ACCOUNTING_USD);

$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(5, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(50, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(30, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(20, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(20, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(18, 'px');
$spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(20, 'px');

$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Sarpras');
$sheet->setCellValue('C1', 'Merk Sarpras');
$sheet->setCellValue('D1', 'Nomor Register');
$sheet->setCellValue('E1', 'Tipe Sarpras');
$sheet->setCellValue('F1', 'Harga Satuan');
$sheet->setCellValue('G1', 'Tahun Pembelian');
$sheet->setCellValue('H1', 'Sumber Dana');
$sheet->setCellValue('I1', 'Kondisi');
$sheet->setCellValue('J1', 'Ruangan');
 
$item = mysqli_query($db, "SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($item ))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['namaBarang']);
	$sheet->setCellValue('C'.$i, $row['merkBarang']);
	$sheet->setCellValue('D'.$i, $row['nomorRegister']);
	$sheet->setCellValue('E'.$i, $row['tipeBarang']);
	$sheet->setCellValue('F'.$i, $row['hargaSatuan']);
	$sheet->setCellValue('G'.$i, $row['tahunPembelian']);
	$sheet->setCellValue('H'.$i, $row['sumberDana']);
	$sheet->setCellValue('I'.$i, $row['kondisiBarang']);	
	$sheet->setCellValue('J'.$i, $row['namaRuangan']);	
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
$sheet->getStyle('A1:J'.$i)->applyFromArray($styleArray);
  
 
 
$file = "Laporan Data Sarpras.xlsx";
$writer = new Xlsx($spreadsheet);
// $writer->save($file);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$file.'"');
$writer->save("php://output");

?>