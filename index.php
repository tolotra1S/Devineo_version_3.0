<?php

session_start();
if(!$_SESSION["mdp"]){
    header("Location: connexion.php");
}
echo $_SESSION["pseudo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="deconnexion.php"><button>Deconnexion</button></a>
</body>
</html>