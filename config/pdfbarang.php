  <?php
    require "connect.php";
    require 'fpdf.php';
    $barang = querySql("SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");


    class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(110);
    // Title
    $this->Cell(50,10,'LAPORAN DAFTAR ASET',0,0,'C');
    // Line break
    $this->Ln(15);
}

}

// Instanciation of inherited class
$pdf = new PDF();

// $pdf->AddPage();
$pdf->SetFont('Times','',12);



    // $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->SetLeftMargin(8);
    $pdf->SetRightMargin(9);
    $pdf->SetTopMargin(50);
    $pdf->SetAutoPageBreak(false);
    $pdf->AddPage(["L"]);
    $pdf->Image('../Assets/img/kopsuratsmk2n.png',2,5,0,40);
    $pdf->SetFont('Arial','B',10);



    // Kolom Tabel
    $pdf->SetFillColor(180);
    $pdf->Cell(10,10, "No", "1", "0", "C");
    $pdf->Cell(30,10, "Nama Barang", "1", "0", "C");
    $pdf->Cell(30,10, "Merk Barang", "1", "0", "C");
    $pdf->Cell(30,10, "Nomor Register", "1", "0", "C");
    $pdf->Cell(30,10, "Tipe Barang", "1", "0", "C");
    $pdf->Cell(30,10, "Harga Satuan", "1", "0", "C");
    $pdf->Cell(30,10, "Tahun pembelian", "1", "0", "C");
    $pdf->Cell(30,10, "Sumber Dana", "1", "0", "C");
    $pdf->Cell(30,10, "Kondisi Barang", "1", "0", "C");
    $pdf->Cell(30,10, "Ruangan", "1", "1", "C");

    // Baris Tabel
    $pdf->SetFont('Arial','',8);
    $count = 1;
    foreach($barang as $item) :
        $pdf->Cell(10,10, $count, "1", "0", "C");
        $pdf->Cell(30,10,$item['namaBarang'], "1", "0", "C");
        $pdf->Cell(30,10, $item['merkBarang'], "1", "0", "C");
        $pdf->Cell(30,10, $item['nomorRegister'], "1", "0", "C");
        $pdf->Cell(30,10, $item['tipeBarang'], "1", "0", "C");
        $pdf->Cell(30,10, $item['hargaSatuan'], "1", "0", "C");
        $pdf->Cell(30,10, $item['tahunPembelian'], "1", "0", "C");
        $pdf->Cell(30,10, $item['sumberDana'], "1", "0", "C");
        $pdf->Cell(30,10, $item['kondisiBarang'], "1", "0", "C");
        $pdf->Cell(30,10, $item['namaRuangan'], "1", "1", "C");
        $count++;
    endforeach;

    $pdf->Output(); 

?>
