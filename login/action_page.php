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
        
        echo "<p>".$params['fname']."</p>";
        echo "<p>".$params['lname']."</p>";
        
        
        
        if ($params['lname'] == "Gr!sons2019"){
            echo "<p>successfully connected</p>";
            echo '<script src="cookie.js"></script>';
            echo '<script type="text/JavaScript"> document.cookie = `idd=qdfg; path=/`;
            setTimeout(window.location.replace(`https://www.neocomia-neocomensis.com`), 1000);
     </script>'
     
;           
            
//die();
        }
        else {
            echo "<p>error during connection</p>";
        }
        
        if ($params['lname'] == "del"){
            $sql = "SELECT id, ip_address FROM connection";
            $result = $conn->query($sql);
            $length = 0;
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["ip_address"]. "<br>";
                $length += 1;
              }
            } else {
              echo "0 results";
            }

        }
        
        $ip=$_SERVER['REMOTE_ADDR'];
        $ip_address = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip))["geoplugin_request"];
        echo $ip_address;
        
        
        $sql = "INSERT INTO connection (id, ip_address)
        VALUES ('$length', '$ip_address')";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    ?>
</body>
</html>