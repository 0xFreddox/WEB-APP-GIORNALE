<?php
include 'config-db.php';

session_start();

if(isset($_SESSION['user_id'])) {
    $username = $_SESSION['username'];
    $query = "SELECT username FROM Utenti WHERE Id_utente = :Id_utente";
    
    // Prepara e esegui la query
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    

    if($stmt->rowCount() > 0) {
        $user_id = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "ID dell'utente: " . $user_id['Id_utente'];
    } else {
        echo "Nessun utente trovato con questo username.";
    }
} else {
    echo "Utente non autenticato.";
}
?>
