<?php
require("htmlform.php");
require("config.php");
session_start();

if(isset($_SESSION["id"])!=null){
    echo $mainpage;}
else {
    
    echo $login;
    
}

?>