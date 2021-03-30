<?php

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'1083');

    //1
    $produit1=mysqli_query($con,'select * from tshirt WHERE produit_ID=1');
    if (mysqli_num_rows($produit1) > 0) {
        while($rowData = mysqli_fetch_array($produit1)){
              $nom1=$rowData['nom'];
              $couleur1=$rowData['couleur'];
              $prix1=$rowData['prix'];
              $image1=$rowData['image'];
        }
    }

    //2
    $produit2=mysqli_query($con,'select * from tshirt WHERE produit_ID=2');
    if (mysqli_num_rows($produit2) > 0) {
        while($rowData = mysqli_fetch_array($produit2)){
              $nom2=$rowData['nom'];
              $couleur2=$rowData['couleur'];
              $prix2=$rowData['prix'];
              $image2=$rowData['image'];
        }
    }

    //3
    $produit3=mysqli_query($con,'select * from tshirt WHERE produit_ID=3');
    if (mysqli_num_rows($produit3) > 0) {
        while($rowData = mysqli_fetch_array($produit3)){
              $nom3=$rowData['nom'];
              $couleur3=$rowData['couleur'];
              $prix3=$rowData['prix'];
              $image3=$rowData['image'];
        }
    }

    //4
    $produit4=mysqli_query($con,'select * from tshirt WHERE produit_ID=4');
    if (mysqli_num_rows($produit4) > 0) {
        while($rowData = mysqli_fetch_array($produit4)){
              $nom4=$rowData['nom'];
              $couleur4=$rowData['couleur'];
              $prix4=$rowData['prix'];
              $image4=$rowData['image'];
        }
    }

    //5
    $produit5=mysqli_query($con,'select * from tshirt WHERE produit_ID=5');
    if (mysqli_num_rows($produit5) > 0) {
        while($rowData = mysqli_fetch_array($produit5)){
              $nom5=$rowData['nom'];
              $couleur5=$rowData['couleur'];
              $prix5=$rowData['prix'];
              $image5=$rowData['image'];
        }
    }
    
    //6
    $produit6=mysqli_query($con,'select * from tshirt WHERE produit_ID=6');
    if (mysqli_num_rows($produit6) > 0) {
        while($rowData = mysqli_fetch_array($produit6)){
              $nom6=$rowData['nom'];
              $couleur6=$rowData['couleur'];
              $prix6=$rowData['prix'];
              $image6=$rowData['image'];
        }
    }
    
    //7
    $produit7=mysqli_query($con,'select * from tshirt WHERE produit_ID=7');
    if (mysqli_num_rows($produit7) > 0) {
        while($rowData = mysqli_fetch_array($produit7)){
              $nom7=$rowData['nom'];
              $couleur7=$rowData['couleur'];
              $prix7=$rowData['prix'];
              $image7=$rowData['image'];
        }
    }
    
    //8
    $produit8=mysqli_query($con,'select * from tshirt WHERE produit_ID=8');
    if (mysqli_num_rows($produit8) > 0) {
        while($rowData = mysqli_fetch_array($produit8)){
              $nom8=$rowData['nom'];
              $couleur8=$rowData['couleur'];
              $prix8=$rowData['prix'];
              $image8=$rowData['image'];
        }
    }
    
    //9
    $produit9=mysqli_query($con,'select * from tshirt WHERE produit_ID=9');
    if (mysqli_num_rows($produit9) > 0) {
        while($rowData = mysqli_fetch_array($produit9)){
              $nom9=$rowData['nom'];
              $couleur9=$rowData['couleur'];
              $prix9=$rowData['prix'];
              $image9=$rowData['image'];
        }
    }
    
    //10
    $produit10=mysqli_query($con,'select * from tshirt WHERE produit_ID=10');
    if (mysqli_num_rows($produit10) > 0) {
        while($rowData = mysqli_fetch_array($produit10)){
              $nom10=$rowData['nom'];
              $couleur10=$rowData['couleur'];
              $prix10=$rowData['prix'];
              $image10=$rowData['image'];
        }
    }
    
    //11
    $produit11=mysqli_query($con,'select * from tshirt WHERE produit_ID=11');
    if (mysqli_num_rows($produit11) > 0) {
        while($rowData = mysqli_fetch_array($produit11)){
              $nom11=$rowData['nom'];
              $couleur11=$rowData['couleur'];
              $prix11=$rowData['prix'];
              $image11=$rowData['image'];
        }
    }
    
    //12
    $produit12=mysqli_query($con,'select * from tshirt WHERE produit_ID=12');
    if (mysqli_num_rows($produit12) > 0) {
        while($rowData = mysqli_fetch_array($produit12)){
              $nom12=$rowData['nom'];
              $couleur12=$rowData['couleur'];
              $prix12=$rowData['prix'];
              $image12=$rowData['image'];
        }
    }
    
    //13
    $produit13=mysqli_query($con,'select * from tshirt WHERE produit_ID=13');
    if (mysqli_num_rows($produit13) > 0) {
        while($rowData = mysqli_fetch_array($produit13)){
              $nom13=$rowData['nom'];
              $couleur13=$rowData['couleur'];
              $prix13=$rowData['prix'];
              $image13=$rowData['image'];
        }
    }
?>