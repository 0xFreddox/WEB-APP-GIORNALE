<?php
   $servername = "localhost";
   $username = "web_giornale";
   $password = "passwordprova";
   $dbname = "web_giornale";
  
   
   try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e){
    echo "Connessione Fallita" . $e -> getMessage();
   } 

?>
