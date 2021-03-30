<?php

    //RISQUE DE PLANTER CAR LES IMAGES NE SONT PAS DANS LE MÊME DOSSIER QUE LE CODE

    require('./fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddFont('segoeuisl','','segoeuisl.php');
    $pdf->AddFont('seguisb','','seguisb.php');

    //PREMIERE PAGE T-SHIRT
    $pdf->AddPage();

    //PRODUITS
    $pdf->Cell(0,10,'',0,1);
    $pdf->Cell(135,0,'');

    $pdf->SetFont('seguisb','',30);
    $pdf->SetTextColor(229, 35, 32); //#E52320
    $pdf->Write(0,($_POST['type']));
    $pdf->Ln(1);
    $pdf->Cell(147,0,'');

    $pdf->SetFont('segoeuisl','',25);
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->Write(15,($_POST['genre']));
    $pdf->Ln(1);

    //DESCRIPTION
    $pdf->SetFont('segoeuisl','',14);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(150,20,'',0,1);
    $pdf->MultiCell(190,7,($_POST['description']),0,'J');
    $pdf->SetFont('segoeuisl','',12);
    $pdf->Ln(10);

    //IMAGES + nom + PRIX
    $pdf->Image(($_POST['tshirt1']),10,77,60,60);
    $pdf->Cell(170,58.5,'',0,1);
    $pdf->Cell(20,5,'');
    $pdf->Write(5,($_POST['nom1']).' - '.($_POST['prix1']));

    $pdf->Image(($_POST['tshirt2']),140,77,60,60);
    $pdf->Cell(100,5,'');
    $pdf->Write(5,($_POST['nom2']).' - '.($_POST['prix2']));
    $pdf->Ln(5);

    $pdf->Image(($_POST['tshirt3']),75,140,60,60);
    $pdf->Cell(0,58,'',0,1);
    $pdf->Cell(75,0,'');
    $pdf->Write(5,($_POST['nom3']).' - '.($_POST['prix3']));

    $pdf->Cell(280,61.5,'',0,1);
    $pdf->Cell(10,2,'');
    $pdf->Image(($_POST['tshirt4']),10,202,60,60);
    $pdf->Write(5,($_POST['nom4']).' - '.($_POST['prix4']));

    $pdf->Image(($_POST['tshirt5']),140,202,60,60);
    $pdf->Cell(93,5,'');
    $pdf->Write(5,($_POST['nom5']).' - '.($_POST['prix5']));


    //DEUXIEME PAGE T-SHIRT
    $pdf->AddPage();

    $pdf->Image(($_POST['tshirt6']),10,10,60,60);
    $pdf->Cell(170,61,'',0,1);
    $pdf->Cell(17,5,'');
    $pdf->Write(5,($_POST['nom6']).' - '.($_POST['prix6']));

    $pdf->Image(($_POST['tshirt7']),140,10,60,60);
    $pdf->Cell(107,5,'');
    $pdf->Write(5,($_POST['nom7']).' - '.($_POST['prix7']));
    $pdf->Ln(5);

    $pdf->Image(($_POST['tshirt8']),75,57,60,60);
    $pdf->Cell(1,42,'',0,1);
    $pdf->Cell(79,1,'');
    $pdf->Write(5,($_POST['nom8']).' - '.($_POST['prix8']));
    $pdf->Ln(5);

    $pdf->Image(($_POST['tshirt9']),10,105,60,60);
    $pdf->Cell(0,43,'',0,1);
    $pdf->Cell(17,1,'');
    $pdf->Write(5,($_POST['nom9']).' - '.($_POST['prix9']));

    $pdf->Cell(107,1,'');
    $pdf->Image(($_POST['tshirt10']),140,105,60,60);
    $pdf->Write(5,($_POST['nom10']).' - '.($_POST['prix10']));

    $pdf->Image(($_POST['tshirt11']),75,155,60,60);
    $pdf->Cell(0,50,'',0,1);
    $pdf->Cell(79,5,'');
    $pdf->Write(5,($_POST['nom11']).' - '.($_POST['prix11']));

    $pdf->Cell(1,47,'',0,1);
    $pdf->Cell(18,2,'');
    $pdf->Image(($_POST['tshirt12']),10,202,60,60);
    $pdf->Write(5,($_POST['nom12']).' - '.($_POST['prix12']));

    $pdf->Image(($_POST['tshirt13']),140,202,60,60);
    $pdf->Cell(106.5,5,'');
    $pdf->Write(5,($_POST['nom13']).' - '.($_POST['prix13']));

    $pdf->Output();

?>