<?php
    require "connect.php";
    require 'fpdf.php';

    $users = querySql('SELECT * FROM tuser WHERE isDeleted = 0');

    $pdf = new FPDF();
    $pdf->AddPage(["L"]);
    $pdf->SetFont('Arial','B',14);

    // Kolom Tabel
    $pdf->SetFillColor(180);
    $pdf->Cell(10,10, "No", "1", "0", "C");
    $pdf->Cell(100,10, "Nama", "1", "0", "C");
    $pdf->Cell(70,10, "NIK", "1", "0", "C");
    $pdf->Cell(50,10, "Jabatan", "1", "0", "C");
    $pdf->Cell(50,10, "Role", "1", "1", "C");

    // Baris Tabel
    $pdf->SetFont('Arial','',11);
    $count = 1;
    foreach($users as $user) :
        $pdf->Cell(10,10, $count, "1", "0", "C");
        $pdf->Cell(100,10, $user['nama'], "1", "0", "C");
        $pdf->Cell(70,10, $user['nik'], "1", "0", "C");
        $pdf->Cell(50,10, $user['status'], "1", "0", "C");
        $pdf->Cell(50,10, $user['role'], "1", "1", "C");
        $count++;
    endforeach;
    
    $pdf->Output(); 

?>