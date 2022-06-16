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
<body onload="adm()">
    
<img src="image/banniere-a.jpg" class="banniere" width="100%">
<img src="image/113.png" class="image-1" width="80px">

<div class="body-page"></div>

<img class="bg-image" src="image/neuchatel-ville.jpeg" width="100%">
<p class="titre-pro">Prochain Pince: </p>
<div class="box-info-1"></div>


<div class="max-height-page">fin</div>
<p id="data" style="position: absolute; top: 200px; color: white"></p>
<script>
  if (getCookie("idUser")!=null){
    document.getElementById("data").innerHTML = getCookie("idUser");
  }
    
</script>

<nav class="menubar">
  <a href="index.html" class="menutext" style="font-size: 30px;">Neocomia Neocomensis</a>
  <a href="login/login.html" class="menutext" style="left: 90%; padding-right: 5px;">connexion</a>
  <a href="index.html" class="menutext" style="left: 83%;padding-right: 5px;">réseaux</a>
  <a href="index.html" class="menutext" style="left: 74%;padding-right: 5px;">nos pinces</a>
  <a href="index.html" class="menutext" style="left: 67%;padding-right: 5px;">histoire</a>
</nav>

<div class="edit-menu">
    
</div>

<?php
    $servername = "127.0.0.1:3306";
    $username = "u806253155_dano";
    $password = "I16shrJQhAAF9Q50iA1q!";
    $dbname = "u806253155_actif";
    
    //echo $servername . " " . $username . " " . $password . " " . $dbname;
    $style = "\"position: fixed; left: 0px; top: 0px; width: 100%; height: 50px; background-color: black;\"";
    
    $all_class = ["information-1", "box-info-1"];
    $func = "";
    
    for ($x = 0; $x <= 1; $x++){
        $func .= "document.getElementsByClassName('".$all_class[$x]."')[0].setAttribute('onmouseover', `alerter('".$all_class[$x]."')`);";
        $func .= "document.getElementsByClassName('".$all_class[$x]."')[0].setAttribute('onmouseout', `out('".$all_class[$x]."')`);";
        $func .= "document.getElementsByClassName('".$all_class[$x]."')[0].setAttribute('onclick', `clicks('".$all_class[$x]."')`);";
    }
    echo "<p style='position:absolute;top:100px;'>".$_COOKIE['idd']."</p>";
    
    if ($_COOKIE["idd"] == "qdfg") {
        
        echo "
        <script>
        alert('salut');
        function adm(){
            document.getElementsByClassName('menubar')[0].style.top = '50px'
            document.getElementsByClassName('edit-menu')[0].innerHTML = '<div style=$style></div>'
            var np = document.createElement('div')
            np.id = 'cl1'
            document.body.appendChild(np)
            document.getElementById('cl1').innerHTML = '<img width=20 src=image/save.png style=position:absolute;filter:invert(100%);left:96%;top:14px>'
            
            document.getElementById('cl1').innerHTML += '<p style=position:absolute;left:35px;top:14px;font-size:18px;color:white;>ajouter</p>'

            $func
            
        }
        
        function gg() {
            var cu = document.getElementById(`ss`).value;
            window.location.replace(`https://www.neocomia-neocomensis.com/update.php?f=`+cu+``);
        }
        function ff() {document.getElementById('cl1').innerHTML += '<div style=position:absolute;width:300px;height:500px;left:150px;top:100px;background-color:black><input id=ss type=text style=position:absolute;margin-left:15px;margin-top:20px></div>'}
        function alerter(cl){document.getElementsByClassName(cl)[0].style.border = 'solid #008BDB 5px'}
        function out(cl){document.getElementsByClassName(cl)[0].style.border = 'solid #008BDB 0px'}
        function clicks(cl){
            
            document.getElementById('cl1').innerHTML = '<img width=20 src=image/save.png onclick=gg() style=position:absolute;filter:invert(100%);left:96%;top:14px><p style=position:absolute;left:35px;top:14px;font-size:18px;color:white;>ajouter</p>'
            document.getElementById('cl1').innerHTML += '<p onclick=ff() style=position:absolute;left:110px;top:14px;font-size:18px;color:white;>'+cl+'</p>'
        }
          
        </script>
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

