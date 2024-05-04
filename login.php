<?php
require("config.php");
session_start();
if (isset($_POST["anbs"])) {
    
    $users=$_POST["usern"];
    
    $password=md5($_POST["passwords"]);
    $sql = "SELECT * FROM `user` WHERE `users` = '$users'";
    
    $result=mysqli_query($connce,$sql);
    if (mysqli_num_rows($result)> 0) {
    while($row=mysqli_fetch_array($result)){
        if($row["password"]==$password){
            $_SESSION["id"]= $row["id"];
            header("Location:index.php");
        }else{
            
            header("Location:index.php");   
            
        }
        

    }   
}else{echo"<br> ther is no user like that";header("Location:index.php");}

}else{

echo 'fech tnayik lina ';
}

?>