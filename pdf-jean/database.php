<?php

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'1083');

    $produit=mysqli_query($con,'select * from jean');
    if (mysqli_num_rows($produit) > 0) {
        while($rowData = mysqli_fetch_array($produit)){
              $nom=$rowData['nom'];
              $modele=$rowData['modele'];
              $prix=$rowData['prix'];
              $couleur=$rowData['couleur'];
              $tailleMin=$rowData['taille min'];
              $tailleMax=$rowData['taille max'];
              $longMin=$rowData['longueur min'];
              $longMax=$rowData['longueur max'];
              $coupe=$rowData['coupe'];
              $taille=$rowData['taille'];
              $denim=$rowData['denim'];
              $composition=$rowData['composition'];
              $finition=$rowData['finitions'];
              $certification=$rowData['certification'];
              $origine=$rowData['origine'];
              $petitTexte=$rowData['petit_texte'];
              $description=$rowData['description'];
              $minia=$rowData['image minia'];
              $palette=$rowData['palettes'];
              $expo=$rowData['image expo'];
              $petiteImage1=$rowData['petite image 1'];
              $petiteImage2=$rowData['petite image 2'];
              $logo=$rowData['logo'];
        }
    }

?>