  <?php
    require "connect.php";
    require 'fpdf.php';
    $buku = querySql("SELECT tbuku.*, truangan.namaRuangan FROM tbuku LEFT JOIN truangan ON truangan.idRuangan = tbuku.linkRuangan  WHERE tbuku.isDeleted=0");

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
    $this->Cell(50,10,'LAPORAN DAFTAR BUKU',0,0,'C');
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
    $pdf->SetFont('Arial','B',8);



    // Kolom Tabel
    $pdf->SetFillColor(180);
    $pdf->Cell(8,10, "No", "1", "0", "C");
    $pdf->Cell(25,10, "Judul Buku", "1", "0", "C");
    $pdf->Cell(25,10, "Nomor Buku", "1", "0", "C");
    $pdf->Cell(25,10, "Pengarang", "1", "0", "C");
    $pdf->Cell(25,10, "Penerbit", "1", "0", "C");
    $pdf->Cell(25,10, "Tahun Terbit", "1", "0", "C");
    $pdf->Cell(25,10, "Jumlah Halaman", "1", "0", "C");
    $pdf->Cell(25,10, "Nomor Register", "1", "0", "C");
    $pdf->Cell(25,10, "Tahun Pembelian", "1", "0", "C");
    $pdf->Cell(25,10, "Sumber Dana", "1", "0", "C");
    $pdf->Cell(25,10, "Kondisi Buku", "1", "0", "C");
    $pdf->Cell(25,10, "Ruangan", "1", "1", "C");

    // Baris Tabel
    $pdf->SetFont('Arial','',8);
    $count = 1;
    foreach($buku as $item) :
        $pdf->Cell(8,10, $count, "1", "0", "C");
        $pdf->Cell(25,10,$item['judulBuku'], "1", "0", "C");
        $pdf->Cell(25,10, $item['nomorBuku'], "1", "0", "C");
        $pdf->Cell(25,10, $item['pengarang'], "1", "0", "C");
        $pdf->Cell(25,10, $item['penerbit'], "1", "0", "C");
        $pdf->Cell(25,10, $item['tahunTerbit'], "1", "0", "C");
        $pdf->Cell(25,10, $item['jumlahHalaman'], "1", "0", "C");
        $pdf->Cell(25,10, $item['nomorRegister'], "1", "0", "C");
        $pdf->Cell(25,10, $item['tahunPembelian'], "1", "0", "C");
        $pdf->Cell(25,10, $item['sumberDana'], "1", "0", "C");
        $pdf->Cell(25,10, $item['kondisiBuku'], "1", "0", "C");
        $pdf->Cell(25,10, $item['namaRuangan'], "1", "1", "C");
        $count++;
    endforeach;

    $pdf->Output(); 
    $pdf->write_html(content);
?>
