<?php

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'1083');

    //NOM
    $nomProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($nomProduit) > 0) {
        while($rowData = mysqli_fetch_array($nomProduit)){
              $nom=$rowData['nom'];
        }
    }

    //PRIX
    $prixProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($prixProduit) > 0) {
        while($rowData = mysqli_fetch_array($prixProduit)){
              $prix=$rowData['prix'];
        }
    }

    //COULEUR
    $couleurProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($couleurProduit) > 0) {
        while($rowData = mysqli_fetch_array($couleurProduit)){
              $couleur=$rowData['couleur'];
        }
    }

    //TAILLE MIN
    $tailleMinProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($tailleMinProduit) > 0) {
        while($rowData = mysqli_fetch_array($tailleMinProduit)){
              $tailleMin=$rowData['taille min'];
        }
    }

    //TAILLE MAX
    $tailleMaxProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($tailleMaxProduit) > 0) {
        while($rowData = mysqli_fetch_array($tailleMaxProduit)){
              $tailleMax=$rowData['taille max'];
        }
    }

    //LONGUEUR MIN
    $longMinProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($longMinProduit) > 0) {
        while($rowData = mysqli_fetch_array($longMinProduit)){
              $longMin=$rowData['longueur min'];
        }
    }

    //LONGUEUR MAX
    $longMaxProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($longMaxProduit) > 0) {
        while($rowData = mysqli_fetch_array($longMaxProduit)){
              $longMax=$rowData['longueur max'];
        }
    }

    //COULEUR
    $couleurProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($couleurProduit) > 0) {
        while($rowData = mysqli_fetch_array($couleurProduit)){
              $couleur=$rowData['couleur'];
        }
    }

    //COUPE
    $coupeProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($coupeProduit) > 0) {
        while($rowData = mysqli_fetch_array($coupeProduit)){
              $coupe=$rowData['coupe'];
        }
    }

    //DENIM
    $denimProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($denimProduit) > 0) {
        while($rowData = mysqli_fetch_array($denimProduit)){
              $denim=$rowData['denim'];
        }
    }

    //COMPOSITION
    $compositionProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($compositionProduit) > 0) {
        while($rowData = mysqli_fetch_array($compositionProduit)){
              $composition=$rowData['composition'];
        }
    }

    //CERTIFICATION
    $certificationProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($certificationProduit) > 0) {
        while($rowData = mysqli_fetch_array($certificationProduit)){
              $certification=$rowData['certification'];
        }
    }

    //FINITION
    $finitionProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($finitionProduit) > 0) {
        while($rowData = mysqli_fetch_array($finitionProduit)){
              $finition=$rowData['finitions'];
        }
    }

    //ORIGINE
    $origineProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($origineProduit) > 0) {
        while($rowData = mysqli_fetch_array($origineProduit)){
              $origine=$rowData['origine'];
        }
    }

    //PETIT TEXTE
    $petitTexteProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($petitTexteProduit) > 0) {
        while($rowData = mysqli_fetch_array($petitTexteProduit)){
              $petitTexte=$rowData['petit_texte'];
        }
    }

    //DESCRIPTION
    $descriptionProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($descriptionProduit) > 0) {
        while($rowData = mysqli_fetch_array($descriptionProduit)){
              $description=$rowData['description'];
        }
    }

    //MINIA
    $miniaProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($miniaProduit) > 0) {
        while($rowData = mysqli_fetch_array($miniaProduit)){
              $minia=$rowData['image minia'];
        }
    }

    //PALETTE
    $paletteProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($paletteProduit) > 0) {
        while($rowData = mysqli_fetch_array($paletteProduit)){
              $palette=$rowData['palettes'];
        }
    }

    //EXPO
    $expoProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($expoProduit) > 0) {
        while($rowData = mysqli_fetch_array($expoProduit)){
              $expo=$rowData['image expo'];
        }
    }

    //PETITE IMAGE 1
    $petiteImage1Produit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($petiteImage1Produit) > 0) {
        while($rowData = mysqli_fetch_array($petiteImage1Produit)){
              $petiteImage1=$rowData['petite image 1'];
        }
    }

    //PETITE IMAGE 2
    $petiteImage2Produit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($petiteImage2Produit) > 0) {
        while($rowData = mysqli_fetch_array($petiteImage2Produit)){
              $petiteImage2=$rowData['petite image 2'];
        }
    }

    //LOGO
    $logoProduit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($logoProduit) > 0) {
        while($rowData = mysqli_fetch_array($logoProduit)){
              $logo=$rowData['logo'];
        }
    }
    

?>