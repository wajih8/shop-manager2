<?php
require("config.php");

if(isset($_POST['cons'])){
  $cons=$_POST['cons'];

if($cons==""){
    $query='SELECT * FROM `produits` ORDER BY id DESC limit 5';
        $result=mysqli_query($connce,$query) ;
        $i=0;
        $fina="";
        while($row=mysqli_fetch_array($result)) {
            if ($row['prix']>1000 ){
                $prix=(string)((int)($row['prix'])/1000)." DT";

            }else{
                $prix=(string)($row["prix"])." millim";
            }
            $fina= $fina."<tr><td>".$row['id']."</td><td>".$row['produit']."</td><td>".$prix."</td><td class='conti'>".$row['conti']."</td><td id='valsk".$i."'></td></tr>";
            
            $i++;
    }
    echo $fina;

}else if(strtoupper($cons)=="ALL" or strtoupper($cons)=="TOUTE"){
    $query='SELECT * FROM `produits`';
    $result=mysqli_query($connce,$query) ;
        $i=0;
        $fina="";
        while($row=mysqli_fetch_array($result)) {
            if ($row['prix']>1000 ){
                $prix=(string)((int)($row['prix'])/1000)." DT";

            }else{
                $prix=(string)($row["prix"])." millim";
            }
            $fina= $fina."<tr><td>".$row['id']."</td><td>".$row['produit']."</td><td>".$prix."</td><td class='conti'>".$row['conti']."</td><td id='valsk".$i."'></td></tr>";
            
            $i++;
    }
    echo $fina;
} else{
$query = "SELECT * FROM `produits` WHERE `produit` LIKE '{$cons}' OR `produit` LIKE '{$cons}%' OR `produit` LIKE '%{$cons}' OR `produit` LIKE '%{$cons}%'";
        $result=mysqli_query($connce,$query) ;
        $i=0;
        $fina="";
        while($row=mysqli_fetch_array($result)) {
            if ($row['prix']>1000 ){
                $prix=(string)((int)($row['prix'])/1000)." DT";

            }else{
                $prix=(string)($row["prix"])." millim";
            }
            $fina= $fina."<tr><td>".$row['id']."</td><td>".$row['produit']."</td><td>".$prix."</td><td class='conti'>".$row['conti']."</td><td id='valsk".$i."'></td></tr>";
            
            $i++;
    }
    echo $fina;

}

}
?>