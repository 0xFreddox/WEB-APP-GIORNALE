<?php
    session_start();
    include 'config-db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST ['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $query = "INSERT INTO Utenti (username,password,email) VALUES (:username,:password,:email)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt ->bindParam(":email", $email);
        if($stmt -> execute()){}
            header("Location: ../html/login.php");
            exit();
        }else{
            echo "Registrazione non avvenuta";
        }


?>