<?php
$mainpage='<!DOCTYPE html>
<html lang="en">
<head>

<link rel="icon" href="site.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cancuri</title>
    <link rel="stylesheet" href="style.css">
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
    ::before
    <header><center><h1>kankouri moaser</h1></center></header>
    <div >
    <nav>
        <ul>
            <li><a target="f1" href="product.php">
                recherche un produit
            </a></li>
            <li><a target="f1" href="newprod.php">
                ajouter un produit
            </a></li>
            <li><a target="f1" onclick="refreshPage()"href="logoff.php">
                logOFF
            </a></li>
        </ul>
    </nav>
    <section>
        <iframe name="f1" src="product.php"></iframe>
    </section>
</div>
    ::after
    </div>
</body>
</html>';
$login='<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="site.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cancuri</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    
</head>
<body>
    <div class="container">
    
    <header class="slam"><center><h1>LOGIN</h1></center></header>
    
    <form class="form1" action="login.php"method="post">
        <fieldset>
        <legend>Login</legend>
        <input class="input" placeholder="User"type="text" name="usern">
        <input class="input" type="password"placeholder="Password" name="passwords">
        <button class="btn"type="reset"> reset</button><input class="btn" type="submit" value="Login" name="anbs">
    
    </fieldset>
    </form>

    
    </div>
</body>
</html>
'
?>