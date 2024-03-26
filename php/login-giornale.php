<?php

session_start();

include 'config-db.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Utenti WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $Id_utente = $user["Id_utente"];
        $isAdmin = $user['isAdmin'];
        $_SESSION['Id_utente'] = $Id_utente;
        $_SESSION['isAdmin'] = $isAdmin;
        header("Location: ../html/Abbonamento.php");
        //header("Location: informazioni_utente.php");
        exit();
    } else {
        echo "Username / Password Sbagliata";
    }
}
?>
