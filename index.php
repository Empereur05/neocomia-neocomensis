<!DOCTYPE html>
<html lang="fr" style="max-width: 100px;">
<head>
  <title>neocomia neocomensis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/custom.css">
  <link rel="stylesheet" href="styles/images.css">
  <link rel="stylesheet" href="styles/font.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="login/cookie.js"></script>
  <script src="script/animation.js"></script>
  <script src="script/main.js"></script>
</head>
<body onload="animation()">
    
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Neocomia Neocomensis</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">réseaux</a></li>
      <li><a href="page/histoire.html">histoire</a></li>
      <li class="nav-connection-icon"><img src="image/login image.png" width="22px"></li>
      <li class="nav-connection"><a href="login/login.html">connection</a></li>
    </ul>
  </div>
</nav>

<img src="image/banniere-a.jpg" class="banniere" width="100%">
<img src="image/113.png" class="image-1" width="80px">

<div class="body-page"></div>





<!--<h2 class="large-title-information">Prochain pince</h2>-->


<h3 class="medium-title-information">vendredi 22 avril 2022</h3>

<?php
    $servername = "127.0.0.1:3306";
    $username = "u806253155_dano";
    $password = "I16shrJQhAAF9Q50iA1q!";
    $dbname = "u806253155_actif";
    
    //echo $servername . " " . $username . " " . $password . " " . $dbname;
    
    if ($_COOKIE["idd"] == "qdfg") {
        echo "
        salut
        ";
    }
    
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM content";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["html"] . $row["titre-1"];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>

</html>

