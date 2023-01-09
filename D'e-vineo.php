<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/Css/style.css">
    <!-- <link rel="apple-touch-icon" sizes="300x300" href="components/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="40x40" href="components/favicon/favicon-32x32.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="components/favicon/favicon-16x16.png">
    <link rel="manifest" href="components/favicon/site.webmanifest">
    <link rel="mask-icon" ,href="components/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>D'e-vineo</title>
</head>
<body>
    <style>
        body{
            background-color: #ddd;
        }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
    </style>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">Meilleurs scores</a></li>
            <li><a href="#contact">Règlement</a></li>
            <li style="float:right"><a href="deconnexion.php">Deconnexion</a></li>
            <li style="float:right"><a class="active" href="#about"><?php 
session_start();
if(!$_SESSION["mdp"]){
    header("Location: connexion.php");
}
echo $_SESSION["pseudo"];?></a></li>
        </ul>
    </nav>

    <div class="container containervisible">
        
        
        <div class="container2">

            
            
            <a href=""><img src="components/Images/logo.png" alt=""></a>
            <div class="label">
                <label>❤️ </label><label id="score">
                 7
                </label>
            </div>
            <input type="text" id="nombre">
                <br>
            
            
            <button type="submit" id="button" class='button' style="--clr:#1e9bff" ><span>Chiffrako</span><i></i></button>      
                <br> 
        </div>
        <div>

            <div class="timer">

            </div>
        </div>
    </div> 
    <footer>
        <h3> © Tolotra M'lay</h3>
    </footer>
    <div class="tentbonne">
        <div class="tent">
            <h1></h1>
        </div>
        <div class="bonne">
            <h1></h1>
        </div>
    </div>
    <div class="start">
        <a href=""><img src="components/Images/logo.png" alt=""></a>
        <h1>PLAY</h1>
        <button type="submit" class="btn-start">

            <i><img src="components/Images/play.png"></i>
        </button>
    </div>
    
    
    <script src="components/Js/index.js"></script>
</body>
</html>