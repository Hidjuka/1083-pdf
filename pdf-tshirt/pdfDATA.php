<?php
    require('./fpdf/fpdf.php');
    require('database.php');

    $pdf = new FPDF();
    $pdf->AddFont('segoeuisl','','segoeuisl.php');
    $pdf->AddFont('seguisb','','seguisb.php');

    //PREMIERE PAGE T-SHIRT
    $pdf->AddPage();

    //QR CODE
    $pdf->Image('./images/frame.png',20,5,20,0);

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
    $pdf->Write(15,'HOMME');
    $pdf->Ln(1);

    //DESCRIPTION
    $pdf->SetFont('segoeuisl','',14);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(150,20,'',0,1);
    $pdf->MultiCell(190,7,
    "Place aux t-shirts en coton bio ! L'indispensable t-shirt a bien des choses en plus chez 1083 : pour la matiere, du coton biologique. Pour la provenance, du made in France. Pour la forme, col rond ou col en V. T-shirts a manches courtes unis ou t-shirt imprimes pour homme, a vous de choisir parmi les coloris !"
    ,0,'J');

    //TAILLE
    $pdf->Cell(100,13,'',0,1);
    $pdf->Cell(130,2,'');
    $pdf->SetFont('segoeuisl','',16);
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->Write(5,'Tailles des T-shirts :');
    $pdf->SetFont('segoeuisl','',14);
    $pdf->SetTextColor(0,0,0);
    $pdf->Ln(6);
    $pdf->Cell(154.5,2,'');
    $pdf->Write(5,'du S au XL');

    $pdf->Ln(0.1);

    //IMAGES
    $pdf->Image($image1,20,80,60);
    $pdf->Image($palette1,85,80,5);

    $pdf->Image($image2,120,120,60);
    $pdf->Image($palette2,185,123,7);

    $pdf->Image($image3,20,180,60);

    //CONSEILS
    $pdf->SetFont('segoeuisl','',18);
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->Ln(1);
    $pdf->Cell(0,130,'',0,1);
    $pdf->Cell(140,10,'');
    $pdf->Write(5,'NOS CONSEILS' );
    $pdf->Image('./images/conseils.png', 137, 216);
    $pdf->SetFont('segoeuisl','',12);
    $pdf->SetTextColor(0,0,0);
    $pdf->Ln(13);
    $pdf->Cell(93,3,'');
    $pdf->MultiCell(91,5,"Pour prendre soin de votre t-shirt et le garder le plus longtemps possible, lavez-le avec des couleurs similaires (a 30 degres maximum, vitesse d'essorage normale) et n'utilisez pas le sache-linge
    

    Et si besoin preferer le repassage sur l'envers !"
    ,0,'R');

    //DEUXIEME PAGE T-SHIRT
    $pdf->AddPage();

    //LOGO
    $pdf->Image('./images/logo.png',165,265,25,0);

    //IMAGE PRINCIPAL
    $pdf->Image($expo,-105,28,300,0);

    //MARGE COTE DROIT
    $pdf->SetFillColor(255,255,255);
    $pdf->Rect(160, 20, 100, 290,'F');

    //PETITES PHOTOS + RECTANGLES
    $pdf->Rect(142, 41, 70, 70,'F');
    $pdf->Image($petiteImage1,147,46,60,60);
    $pdf->Rect(142, 105, 70, 70,'F');
    $pdf->Image($petiteImage2,147,109.5,60,60);

    $pdf->SetFont('seguisb','',24);
    $pdf->SetTextColor(229, 35, 32); //#E52320
    $pdf->Cell(0,190,'',0,1);
    $pdf->Cell(115,0,'');
    $pdf->Write(5,'TSHIRT '.$nom);

    $pdf->Ln(10);
    $pdf->SetFont('segoeuisl','',18);
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->Cell(115,2,'');
    $pdf->MultiCell(45,8,$couleur,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(135,20,'');
    $pdf->SetTextColor(0,0,0); //#162F9D
    $pdf->SetFont('segoeuisl','',14);
    $pdf->Cell(0,0,$prix);

    $pdf->Output();

?>