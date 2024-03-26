<!DOCTYPE html>
<html>
    <head>
        <title>Account</title>
        <link rel="stylesheet" type="text/css" href="../css/Account.css" />
    </head>
    <body>
        <?php
            session_start();
            include '../php/config-db.php';
            include '../php/common.php';
            include '../php/header.php';
            if(!check_user_logged_in()){
                header("Location: login.php");
                exit(); 
            }
    
            $Id_utente = $_SESSION["Id_utente"];
            $query = "SELECT username FROM Utenti WHERE Id_utente = :Id_utente";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":Id_utente", $Id_utente);
            $stmt->execute();
            $informazioni_utente = $stmt->fetch(PDO::FETCH_ASSOC);            
        ?>
        <div class="user-info">
            <?php
                 echo "<p>Benvenuto " . $informazioni_utente['username'] . "</p>";
            ?>
        </div>
    </body>
</html>
