<?php
    require "../connect.php";
    require "pdf_mc_table.php";

    
    // $buku = querySql("SELECT tbuku.*, truangan.namaRuangan FROM tbuku LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");
    $buku = querySql("SELECT tbuku.*, truangan.namaRuangan FROM tbuku LEFT JOIN truangan ON truangan.idRuangan = tbuku.linkRuangan  WHERE tbuku.isDeleted=0");

    $pdf = new PDF_MC_Table();

    // $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->SetLeftMargin(10);
    $pdf->SetRightMargin(10);
    $pdf->SetTopMargin(10);
    // $pdf->SetBottomMargin(10);
    $pdf->SetAutoPageBreak(true, 7);
    $pdf->AddPage(["L"]);

    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(279, 40, $pdf->Image('../../Assets/img/kopsuratsmk2n.png',2,5,0,40), 0, 1, 'L', false);
     $pdf->Cell(265, 13, 'Laporan Buku', 0, 1, 'C', false);
     $pdf->Cell(265, 5, '', 0, 1, 'C', false);

    // Kolom Tabel
    $pdf->SetFillColor(180);
    $pdf->SetWidths(Array(10, 30, 23, 23, 23, 23, 20, 20, 20, 23,20, 20, 24));
    $pdf->SetAligns(Array("C","C","C","C","C","C","C","C","C","C","C","C","C"));
    $pdf->SetLineHeight(7);

    
    $pdf->SetFont('Arial','B',9);
    
    $pdf->Row(Array(
            'No',
            'Judul Buku', 
            'Nomor ISBN/ISSN',
            'Nomor Register', 
            'Pengarang', 
            'Penerbit', 
            'Tahun Terbit', 
            'Tahun Pembelian',
            'Jumlah Halaman', 
            'Harga Buku',  
            'Sumber Dana', 
            'Kondisi Buku', 
            'Nama Ruangan'
        ));

    $pdf->SetFont('Arial','',9 );
    $pdf->SetLineHeight(6);
    $pdf->SetAligns(Array("C","","","","","","","","","","","",""));
    $count = 1;
 
    foreach($buku as $item) :
        $nilai = $item['hargaBuku'];
        $harga = number_format($nilai,0,',','.');
        $hargaNew = "Rp. $harga";
        $pdf->Row(Array(
            $count,
            $item['judulBuku'], 
            $item['nomorBuku'], 
            $item['nomorRegister'], 
            $item['pengarang'], 
            $item['penerbit'], 
            $item['tahunTerbit'], 
            $item['tahunPembelian'], 
            $item['jumlahHalaman'], 
            $hargaNew,
            $item['sumberDana'],
            $item['kondisiBuku'],
            $item['namaRuangan']
        ));
        $count++;
    endforeach;
        
    
    $pdf->Output(); 

?>