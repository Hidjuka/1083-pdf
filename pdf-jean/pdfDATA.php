<?php
    require('./fpdf/fpdf.php');
    require('database.php');

    $pdf = new FPDF();
    $pdf->AddFont('segoeuisl','','segoeuisl.php');
    $pdf->AddFont('seguisb','','seguisb.php');

    //PREMIERE PAGE JEAN
    $pdf->AddPage();

    //IMAGE
    $pdf->Image($minia,30,15,95,95);

    //NOM PRODUIT
    $pdf->SetTextColor(229, 35, 32); //#E52320
    $pdf->SetFont('seguisb','',24);
    $pdf->Cell(0,40,'',0,1);
    $pdf->Cell(9.,0,'');
    $pdf->Write(5,'JEAN '.$nom);

    $pdf->Ln(5);

    //COUPE
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->SetFont('seguisb','',18);
    $pdf->Cell(4,0,'');
    $pdf->Write(10,'COUPE '.$coupe);

    //TAILLE :
    $pdf->SetFont('segoeuisl','',14);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(85,0,'');
    $pdf->Write(25,'Taille :');
    $pdf->Ln(6);

    //PRIX
    $pdf->Cell(16.5,0,'');
    $pdf->Write(30,$prix);

    //DU .. AU .. TAILLE
    $pdf->Cell(103,0,'');
    $pdf->Write(25,'du '.$tailleMin.' au '.$tailleMax);
    $pdf->Ln(6);

    //DU .. AU .. LONGUEUR
    $pdf->Cell(133,0,'');
    $pdf->Write(35,'Longueur :');
    $pdf->Ln(6);
    $pdf->Cell(133,0,'');
    $pdf->Write(35,'du '.$longMin.' au '.$longMax);
    $pdf->Ln(5);

    //IMAGE PALETTE
    $pdf->Image($palette,130,15,8);
    
    //DESCRIPTION
    $pdf->Cell(0,50,'',0,1);
    $pdf->Cell(9,40,'');
    $pdf->MultiCell(100,7,$description,0,'J');

    //ORIGINE
    $pdf->Ln(15);
    $pdf->Cell(70.,0,'');
    $pdf->MultiCell(120,7,$origine,0,'R');

    //2ND DESCRIPTION
    $pdf->Ln(15);
    $pdf->Cell(9,45,'');
    $pdf->MultiCell(100,7,$petitTexte,0,'J');

    //INFORMATIONS CONCEPTION
    $pdf->SetFont('segoeuisl','',12);
    $pdf->Ln(40);
    $pdf->Cell(109,0,'');
    $pdf->MultiCell(120,7,'Denim : '.$denim);
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Couleur : '.$couleur,0,'R');
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Composition : '.$composition,0,'R');
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Finitions : '.$finition,0,'R');
    $pdf->Cell(60,0,'');
    $pdf->MultiCell(130,7,'Certification : '.$certification,0,'R');


    //DEUXIEME PAGE JEAN
    $pdf->AddPage();

    //IMAGE PRINCIPAL
    $pdf->Image($expo,-91,28,300,0);

    //MARGE COTE DROIT
    $pdf->SetFillColor(255,255,255);
    $pdf->Rect(160, 20, 100, 290,'F');

    //PETITES PHOTOS + RECTANGLES
    $pdf->Rect(142, 41, 70, 70,'F');
    $pdf->Image($petiteImage1,147,46,60,60);
    $pdf->Rect(142, 105, 70, 70,'F');
    $pdf->Image($petiteImage2,147,109.5,60,60);

    //LOGO
    $pdf->Image($logo,165,265,25,0);

    $pdf->Output();

?>