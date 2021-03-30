<?php

    //RISQUE DE PLANTER CAR LES IMAGES NE SONT PAS DANS LE MÊME DOSSIER QUE LE CODE

    require('./fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddFont('segoeuisl','','segoeuisl.php');
    $pdf->AddFont('seguisb','','seguisb.php');

    //PREMIERE PAGE JEAN
    $pdf->AddPage();

    //IMAGE
    $pdf->Image(($_POST['imageFiche']),30,15,95,95);

    //NOM PRODUIT
    $pdf->SetTextColor(229, 35, 32); //#E52320
    $pdf->SetFont('seguisb','',24);
    $pdf->Cell(0,40,'',0,1);
    $pdf->Cell(9.,0,'');
    $pdf->Write(5,($_POST['nom']));

    $pdf->Ln(5);

    //COUPE
    $pdf->SetTextColor(22, 47, 157); //#162F9D
    $pdf->SetFont('seguisb','',18);
    $pdf->Cell(4,0,'');
    $pdf->Write(10,'($_POST['coupe'])');

    //TAILLE :
    $pdf->SetFont('segoeuisl','',14);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(85,0,'');
    $pdf->Write(25,'Taille :');
    $pdf->Ln(6);

    //PRIX
    $pdf->Cell(16.5,0,'');
    $pdf->Write(30,($_POST['prix']));

    //DU .. AU .. TAILLE
    $pdf->Cell(103,0,'');
    $pdf->Write(25,'du '.($_POST['tailleMin']).' au '.($_POST['tailleMax']));
    $pdf->Ln(6);

    //DU .. AU .. LONGUEUR
    $pdf->Cell(133,0,'');
    $pdf->Write(35,'Longueur :');
    $pdf->Ln(6);
    $pdf->Cell(133,0,'');
    $pdf->Write(35,'du '.($_POST['longueurMin']).' au '.($_POST['longueurMax']));
    $pdf->Ln(5);

    //IMAGE PALETTE
    $pdf->Image(($_POST['couleur']),130,15,8);
    
    //DESCRIPTION
    $pdf->Cell(0,50,'',0,1);
    $pdf->Cell(9,40,'');
    $pdf->MultiCell(100,7,($_POST['description']),0,'J');

    //ORIGINE
    $pdf->Ln(15);
    $pdf->Cell(70.,0,'');
    $pdf->MultiCell(120,7,($_POST['origine']),0,'R');

    //2ND DESCRIPTION
    $pdf->Ln(15);
    $pdf->Cell(9,45,'');
    $pdf->MultiCell(100,7,($_POST['petitMot']),0,'J');

    //INFORMATIONS CONCEPTION
    $pdf->SetFont('segoeuisl','',12);
    $pdf->Ln(40);
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Denim : '.($_POST['denim']),0,'R');
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Couleur : '.($_POST['couleurExpo']),0,'R');
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Composition : '.($_POST['composition']),0,'R');
    $pdf->Cell(70,0,'');
    $pdf->MultiCell(120,7,'Finitions : '.($_POST['finitions']),0,'R');
    $pdf->Cell(60,0,'');
    $pdf->MultiCell(130,7,'Certification : '.($_POST['certification']),0,'R');


    //DEUXIEME PAGE JEAN
    $pdf->AddPage();

    //IMAGE PRINCIPAL
    $pdf->Image(($_POST['imageEvidence']),-91,28,300,0);

    //MARGE COTE DROIT
    $pdf->SetFillColor(255,255,255);
    $pdf->Rect(160, 20, 100, 290,'F');

    //PETITES PHOTOS + RECTANGLES
    $pdf->Rect(142, 41, 70, 70,'F');
    $pdf->Image(($_POST['imageAppercu1']),147,46,60,60);
    $pdf->Rect(142, 105, 70, 70,'F');
    $pdf->Image(($_POST['imageAppercu2']),147,109.5,60,60);

    //LOGO
    $pdf->Image('logo.png',165,265,25,0);

    $pdf->Output();

?>