<?php
    session_start();
    include 'config-db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST ['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO Utenti (username,password) VALUES (:username,:password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        if($stmt -> execute()){}
            header("Location: ../html/login.php");
            exit();
        }else{
            echo "Registrazione non avvenuta";
        }


?>