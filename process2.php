<?php
require("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $produit = $_POST["prodss"];

    $sql1="SELECT `id` FROM `produits` WHERE produit='$produit'";
    $query=mysqli_query($connce,$sql1);
    if ($query) {
        // Check if any row is returned
        if ($row = mysqli_fetch_assoc($query)) {
            $id = $row['id'];
        }
    }
    
    
    $changerPrix = intval($_POST["prixs"]);
    $addContie = intval($_POST["conti"]);
    if ($changerPrix!=0 and $addContie!=0){
        $sql="UPDATE `produits` SET `prix` = '$changerPrix', `conti`  = `conti` +'$addContie' WHERE `produits`.`id` = $id";
        $connce->query($sql);
        echo "Produit: " . $produit . "<br>";
        echo "Changer Prix: " . $changerPrix . "<br>";
        echo "Add More Contié: " . $addContie;
    }else if ($changerPrix==0){
        $sql="UPDATE `produits` SET  `conti` =  `conti` +'$addContie' WHERE `produits`.`id` = $id";
        $connce->query($sql);
        echo "Produit: " . $produit . "<br>";
        echo "Add More Contié: " . $addContie;
    }else if ($addContie==0){
        $sql="UPDATE `produits` SET  `prix` = '$changerPrix' WHERE `produits`.`id` = $id";
        $connce->query($sql);
        
        echo "Produit: " . $produit . "<br>";
        echo "Changer Prix: " . $changerPrix ;
    }
    else{
        echo "error";
    }

}
?>