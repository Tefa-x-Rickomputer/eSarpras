<?php
    require "../connect.php";
    require "pdf_mc_table.php";

    $barang = querySql("SELECT tbarang.*, truangan.namaRuangan FROM tbarang LEFT JOIN truangan ON truangan.idRuangan = tbarang.linkRuangan  WHERE tbarang.isDeleted=0");


    $users = querySql('SELECT * FROM tuser WHERE isDeleted = 0');
    
    $ttd = querySql("SELECT * FROM tpdf WHERE used = '1' ")[0];
    $ttd2 = querySql("SELECT * FROM tpdf WHERE used = '2' ")[0];
    

    $nama1 = $ttd['nama'];
    $jabatan1 = $ttd['jabatan'];
    $nip1 = $ttd['nip'];

    $nama2 = $ttd2['nama'];
    $jabatan2 = $ttd2['jabatan'];
    $nip2 = $ttd2['nip'];

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
    

       
    //menampilkan fungsi format tanggal Indonesia
    $bulan = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    $waktu[1]=date("d",time());
    $waktu[2]=date("m",time());
    $waktu[3]=date("Y",time());
    $tanggalini="$waktu[1] ".$bulan[$waktu[2]-1]." $waktu[3]";
        //mencetak tanggal
    $pdf->Cell(140, 30, 'Banjarmasin, '.$tanggalini, 0, 0, 'L', false);
    $pdf->Cell(140, 30, 'Banjarmasin, '.$tanggalini, 0, 1, 'R', false);
    

    $pdf->Cell(140, -21, "$jabatan1", 0, 0, 'L', false);
    $pdf->Cell(140, -21, "$jabatan2", 0, 1, 'R', false);
    
    $pdf->Cell(140, 60, "$nama1", 0, 0, 'L', false);
    $pdf->Cell(140, 60, "$nama2", 0, 1, 'R', false);
    
    $pdf->Cell(140, -50, "$nip1", 0, 0, 'L', false);
    $pdf->Cell(140, -50, "$nip2", 0, 1, 'R', false);


    $pdf->Output(); 

?>