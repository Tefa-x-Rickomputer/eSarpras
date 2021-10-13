<?php
    require "../connect.php";
    require "pdf_mc_table.php";

    $barang = querySql("SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");

    $users = querySql('SELECT * FROM tuser WHERE isDeleted = 0');

    $pdf = new PDF_MC_Table();


    // $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->SetLeftMargin(10);
    $pdf->SetRightMargin(10);
    $pdf->SetTopMargin(10);
    $pdf->SetAutoPageBreak(true, 7);
    $pdf->AddPage(["L"]);

    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(279, 40, $pdf->Image('../../Assets/img/kopsuratsmk2n.png',2,5,0,40), 0, 1, 'L', false);
    $pdf->Cell(265, 13, 'Laporan Sarpras', 0, 1, 'C', false);
    $pdf->Cell(265, 5, '', 0, 1, 'C', false);

    // Kolom Tabel
    $pdf->SetFillColor(180);
    $pdf->SetWidths(Array(10, 40, 30, 30, 30, 34, 30, 23, 23, 30));
    $pdf->SetAligns(Array("C","C","C","C","C","C","C","C","C","C","C","C"));
    $pdf->SetLineHeight(7);

    
    $pdf->SetFont('Arial','B',9);
    
    $pdf->Row(Array(
            'No',
            'Nama Barang', 
            'Merk Barang',
            'Nomor Register', 
            'Tipe Barang', 
            'Harga Satuan', 
            'Tahun Pembelian', 
            'Sumber Dana', 
            'Kondisi Barang', 
            'Nama Ruangan'
        ));

    $pdf->SetFont('Arial','',9);
    $pdf->SetLineHeight(6);
    $pdf->SetAligns(Array("C","","","","","","","","","","",""));
    $count = 1;
 
    foreach($barang as $item) {
        $nilai = $item['hargaSatuan'];
        $harga = number_format($nilai,0,',','.');
        $hargaNew = "Rp. $harga";
        $pdf->Row(Array(
            $count,
            $item['namaBarang'], 
            $item['merkBarang'], 
            $item['nomorRegister'], 
            $item['tipeBarang'], 
            $hargaNew, 
            $item['tahunPembelian'], 
            $item['sumberDana'], 
            $item['kondisiBarang'], 
            $item['namaRuangan'],

            
        ));
        $count++;
    }
    $pdf->Cell(240, 40, '11 Oktober 2022', 0, 1, 'R', false);
    $pdf->Cell(250, 30, 'Arya Suryana Lasmana Putri', 0, 1, 'R', false);
    $pdf->Cell(250, 0, 'Arya Suryana Lasmana Putri', 0, 0, 'R', false);
    $pdf->Output(); 

?>