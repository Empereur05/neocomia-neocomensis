<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
</head>
<body>
    <?php
        $servername = "127.0.0.1:3306";
        $username = "u806253155_dano";
        $password = "I16shrJQhAAF9Q50iA1q!";
        $dbname = "u806253155_actif";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
        else  
             $url = "http://";   
        // Append the host(domain name, ip) to the URL.   
        $url.= $_SERVER['HTTP_HOST'];   
        
        // Append the requested resource location to the URL   
        $url.= $_SERVER['REQUEST_URI'];    
          
        echo $url;  
        
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);

        
        
        //$sql = "INSERT INTO content titre-1 VALUES salut";
        $p = $params["f"];
         
        
        $sql = "UPDATE `content` SET `html`='<p class=information-1>$p</p>'";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
        $conn->close();
    ?>
</body>
</html>