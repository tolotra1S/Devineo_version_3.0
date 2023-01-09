<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=connexion;charset=utf8','root','');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = sha1($_POST['mdp']);
            $insertUsers= $bdd->prepare('INSERT INTO users(pseudo,mdp) VALUES(?,?)');
            $insertUsers->execute(array($pseudo,$mdp));

            $recup_user= $bdd->prepare("SELECT * FROM users WHERE pseudo = ? AND mdp= ? ");
            $recup_user->execute(array($pseudo,$mdp));
            if($recup_user->rowCount()>0){
                $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recup_user->fetch()['id'];
            echo  $_SESSION['id'];
            }
            

        }else{
            echo "Veuillez completez tous les champs";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input type="password" name="mdp" autocomplete="off">
        <br><br>
        <input type="submit" name="envoi">

    </form>
    
</body>
</html>