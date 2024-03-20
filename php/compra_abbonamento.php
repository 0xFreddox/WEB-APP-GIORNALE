<?php
session_start();
include 'config-db.php';

if($_SERVER['REQUEST_METHOD'] == "POST" ) {
    
    $Id_utente = $_SESSION['Id_utente'];
    $queryCount = "SELECT COUNT(*) AS num_abbonamenti FROM Abbonamenti WHERE Id_utente = :Id_utente";
    $stmtCount = $conn->prepare($queryCount);
    $stmtCount->bindParam(':Id_utente', $Id_utente);
    $stmtCount->execute();
    $resultCount = $stmtCount->fetch(PDO::FETCH_ASSOC);
    $num_abbonamenti = $resultCount['num_abbonamenti'];

    if ($num_abbonamenti >= 3) {
        echo "Hai già tre abbonamenti attivi. Non puoi abbonarti di nuovo.";
        header("Location: ../html/Home.php");
        exit;
    }

    $Periodicita = $_POST['Periodicita'];
    $query = "INSERT INTO Abbonamenti (Id_Utente, Periodicita) VALUES (:Id_utente, :Periodicita)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':Periodicita', $Periodicita);
    $stmt->bindParam(":Id_utente", $Id_utente);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        echo "Abbonamento Acquistato!";
        header("Location: ../html/Home.php");
        exit;
    }
}
?>
