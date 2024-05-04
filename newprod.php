<?php
require("config.php");
session_start();
if (($_SESSION["id"]==null)){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <script>
        function refreshPage() {
            setTimeout(function() {
                location.reload();
            }, 300);
        }
    </script>
</head>
<body>
    <div class="container">
    <div class="bodys" >
    <form class="form2" action="ajout.php"method="post">
        <fieldset>
        <legend>Ajouter un produits</legend>
        <input class="input" placeholder="produit"type="text" name="prod"autocomplete="off">
        <input class="input" placeholder="prix" name="pri"autocomplete="off">
        <input class="input"type="number" placeholder="contité" name="cons"autocomplete="off">
        <button class="btn"type="reset"> reset</button><input class="btn" type="submit" value="insert" name="anbs"onclick="refreshPage()">
    
    </fieldset>
    </form>
    <form class="form2" id="forms1s">
        <fieldset>
        <legend>update un produit</legend>
        <datalist id="prods">
            <?php
            $query='SELECT `produit` FROM `produits`';
            $result=mysqli_query($connce,$query) ;
            
            while($row=mysqli_fetch_array($result)) {
                
                echo "<option value='".$row['produit']."'>";
                
            }
            ?>
        </datalist>
        <input class="input" placeholder="produit"type="text" list="prods"name="prodss"id="prodss"autocomplete="off">
        <input class="input" placeholder="changer prix"type="text" name="prixs"id="prixs"autocomplete="off">
        <input class="input" placeholder="add more contié"type="text" name="conti"id="conti"autocomplete="off">
        <button class="btn"type="button"name="dels"onclick="deletes()">Delete</button>
        <button class="btn" type="button" name="anbs"onclick="update()">mis ajour un produit</button>
        <center><p id="result" style="color:aliceblue"></p></center>
    
    </fieldset>
    </form>
    </div>
    </div>
    <script src="wow.js"></script>
</body>
</html>