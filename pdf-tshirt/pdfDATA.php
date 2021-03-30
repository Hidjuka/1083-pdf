<?php
    require('./fpdf/fpdf.php');
    require('database.php');

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
    $pdf->Write(0,'T-SHIRTS');
    $pdf->Ln(1);
    $pdf->Cell(147,0,'');

    $pdf->SetFont('segoeuisl','',25);
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->Write(15,'HOMMES');
    $pdf->Ln(1);

    //DESCRIPTION
    $pdf->SetFont('segoeuisl','',14);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(150,20,'',0,1);
    $pdf->MultiCell(190,7,
    "Place aux t-shirts en coton bio ! L'indispensable t-shirt a bien des choses en plus chez 1083 : pour la matiere, du coton biologique. Pour la provenance, du made in France. Pour la forme, col rond ou col en V. T-shirts a manches courtes unis ou t-shirt imprimes pour homme, a vous de choisir parmi les coloris !"
    ,0,'J');
    
    $pdf->SetFont('segoeuisl','',12);
    $pdf->Ln(10);

    //IMAGES + nom + PRIX
    $pdf->Image($image1,10,77,60,60);
    $pdf->Cell(170,58.5,'',0,1);
    $pdf->Cell(10,5,'');
    $pdf->Write(5,$nom1.' '.$couleur1.' - '.$prix1);

    $pdf->Image($image2 ,140,77,60,60);
    $pdf->Cell(100,5,'');
    $pdf->Write(5,$nom2.' '.$couleur2.' - '.$prix2 );
    $pdf->Ln(5);

    $pdf->Image($image3 ,75,140,60,60);
    $pdf->Cell(0,58,'',0,1);
    $pdf->Cell(80,0,'');
    $pdf->Write(5,$nom3.' '.$couleur3.' - '.$prix3 );

    $pdf->Cell(280,61.5,'',0,1);
    $pdf->Cell(15.5,2,'');
    $pdf->Image($image4 ,10,202,60,60);
    $pdf->Write(5,$nom4.' '.$couleur4.' - '.$prix4 );

    $pdf->Image($image5 ,140,202,60,60);
    $pdf->Cell(102,5,'');
    $pdf->Write(5,$nom5.' '.$couleur5.' - '.$prix5 );


    //DEUXIEME PAGE T-SHIRT
    $pdf->AddPage();

    $pdf->Image($image6 ,10,10,60,60);
    $pdf->Cell(170,61,'',0,1);
    $pdf->Cell(14,5,'');
    $pdf->Write(5,$nom6.' '.$couleur6.' - '.$prix6 );

    $pdf->Image($image7 ,140,10,60,60);
    $pdf->Cell(100,5,'');
    $pdf->Write(5,$nom7.' '.$couleur7.' - '.$prix7 );
    $pdf->Ln(5);

    $pdf->Image($image8 ,75,57,60,60);
    $pdf->Cell(1,42,'',0,1);
    $pdf->Cell(80,1,'');
    $pdf->Write(5,$nom8.' '.$couleur8.' - '.$prix8 );
    $pdf->Ln(5);

    $pdf->Image($image9 ,10,105,60,60);
    $pdf->Cell(0,43,'',0,1);
    $pdf->Cell(17,1,'');
    $pdf->Write(5,$nom9.' '.$couleur9.' - '.$prix9 );

    $pdf->Cell(107,1,'');
    $pdf->Image($image10 ,140,105,60,60);
    $pdf->Write(5,$nom10.' '.$couleur10.' - '.$prix10 );

    $pdf->Image($image11 ,75,155,60,60);
    $pdf->Cell(0,50,'',0,1);
    $pdf->Cell(80,5,'');
    $pdf->Write(5,$nom11.' '.$couleur11.' - '.$prix11 );

    $pdf->Cell(1,47,'',0,1);
    $pdf->Cell(12,2,'');
    $pdf->Image($image12 ,10,202,60,60);
    $pdf->Write(5,$nom12.' '.$couleur12.' - '.$prix12 );

    $pdf->Image($image13 ,140,202,60,60);
    $pdf->Cell(100,5,'');
    $pdf->Write(5,$nom13.' '.$couleur13.' - '.$prix13 );

    $pdf->Output();

?>