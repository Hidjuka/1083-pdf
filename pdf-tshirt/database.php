<?php

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'1083');

    //1
    $produit1=mysqli_query($con,'select * from tshirt WHERE produit_ID=7');
    if (mysqli_num_rows($produit1) > 0) {
        while($rowData = mysqli_fetch_array($produit1)){
              $image1=$rowData['image'];
              $palette1=$rowData['palette'];
        }
    }

    //2
    $produit2=mysqli_query($con,'select * from tshirt WHERE produit_ID=4');
    if (mysqli_num_rows($produit2) > 0) {
        while($rowData = mysqli_fetch_array($produit2)){
              $image2=$rowData['image'];
              $palette2=$rowData['palette'];
        }
    }

    //3
    $produit3=mysqli_query($con,'select * from tshirt WHERE produit_ID=12');
    if (mysqli_num_rows($produit3) > 0) {
        while($rowData = mysqli_fetch_array($produit3)){
            $image3=$rowData['image'];
        }
    }

    //4
    $produit4=mysqli_query($con,'select * from tshirt WHERE produit_ID=13');
    if (mysqli_num_rows($produit4) > 0) {
        while($rowData = mysqli_fetch_array($produit4)){
            $nom=$rowData['nom'];
            $couleur=$rowData['couleur'];
            $prix=$rowData['prix'];
            $expo=$rowData['petite image 1'];
            $petiteImage1=$rowData['image'];
            $petiteImage2=$rowData['petite image 2'];

        }
    }
?>