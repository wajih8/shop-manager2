<?php
require("config.php");
session_start();
if (!(isset($_SESSION["id"]))or $_SESSION["id"]==null){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cancuri</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="style.css">
</head>
<body onload="serch();bobi()">
    <div class="container">
        <div class="table">
        <input class="input" placeholder="recherche un produit"type="text" oninput="serch();bobi()"name="prixs"id="mals"autocomplete="off"style="background:black;width:50%;">

        <table id="sass" >
        <tr>
            <th>ID</th>
            <th>Produit</th>
            <th>Prix</th>
            <th>Contité</th>
            <th>Status</th>
        </tr>
        
        
        </table>
    </div>
</div>
    
    </div><script src="waw.js"></script>
    <script>function bobi () {
        setTimeout(() => {  
    const collection = document.getElementsByClassName("conti");
    for (let i = 0; i < collection.length; i++) {
    if(collection[i].textContent==0){
        sa="valsk"+String(i)
        
        va=document.getElementById(sa)
        va.innerText="Hors stock"
        va.classList.add('nvalid');
    }else if (collection[i].textContent<10){
        sa="valsk"+String(i)
        
        va=document.getElementById(sa)
        va.innerText="stock limiter"
        va.classList.add('knvalid');
    }
    else{
        sa="valsk"+String(i)
        
        va=document.getElementById(sa)
        va.innerText="valable"
        va.classList.add('valid');
    }
    } }, 500);
}
    </script>
</body>
</html>