<?php
    require "../connect.php";
    require "pdf_mc_table.php";

    $barang = querySql("SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");

    $users = querySql('SELECT * FROM tuser WHERE isDeleted = 0');

    $pdf = new PDF_MC_Table();


    // $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->SetLeftMargin(8);
    $pdf->SetRightMargin(9);
    $pdf->SetTopMargin(50);
    $pdf->SetAutoPageBreak(false);
    $pdf->AddPage(["L"]);
    $pdf->Image('../../Assets/img/kopsuratsmk2n.png',2,5,0,40);
    $pdf->SetFont('Arial','B',13);

    // Kolom Tabel
    $pdf->SetFillColor(180);
    $pdf->SetWidths(Array(10, 30, 30, 30, 30, 30, 30, 30, 30, 30));
    $pdf->SetAligns(Array("C","C","C","C","C","C","C","C","C","C","C","C"));
    $pdf->SetLineHeight(7);

    
    $pdf->SetFont('Arial','B',14);
    
    $pdf->Row(Array(
            'No',
            'Nama Sapras', 
            'Merk Sapras',
            'Nomor Register', 
            'Tipe Sapras', 
            'Harga Satuan', 
            'Tahun Pembelian', 
            'Sumber Dana', 
            'Kondisi Sapras', 
            'Nama Ruangan'
        ));

    $pdf->SetFont('Arial','',12);
    $pdf->SetLineHeight(6);
    $pdf->SetAligns(Array("C","","","","","","","","","","",""));
    $count = 1;
 
    foreach($barang as $item) :
        $pdf->Row(Array(
            $count,
            $item['namaBarang'], 
            $item['merkBarang'], 
            $item['nomorRegister'], 
            $item['tipeBarang'], 
            $item['hargaSatuan'], 
            $item['tahunPembelian'], 
            $item['sumberDana'], 
            $item['kondisiBarang'], 
            $item['namaRuangan'],

            
        ));
        $count++;
    endforeach;
    
    $pdf->Output(); 

?>