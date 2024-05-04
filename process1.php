<?php
require("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data from the form
    $produit = $_POST["prodss"];
    $s="DELETE FROM produits WHERE produit = '$produit'";
    $ss=mysqli_query($connce,$s);
    if($ss){
    echo"sayi hani fasa5tou";
}else{
    echo"mahouch mawjoud";
}
}
?>