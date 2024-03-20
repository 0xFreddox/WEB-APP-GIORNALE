<?php
include 'config-db.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $titolo = $_POST['titolo'];
        $ArgomentoPubblicazione = $_POST['ArgomentoPubblicazione'];
        $PeriodicitaPubb = $_POST['PeriodicitaPubb']; 

        $query = "INSERT INTO Pubblicazioni (titolo, PeriodicitaPubb, ArgomentoPubblicazione) VALUES (:titolo, :PeriodicitaPubb, :ArgomentoPubblicazione)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':titolo', $titolo);
        $stmt->bindParam(':PeriodicitaPubb', $PeriodicitaPubb);
        $stmt->bindParam(':ArgomentoPubblicazione', $ArgomentoPubblicazione);
        $stmt->execute();

        echo "Pubblicazione aggiunta con successo!";
    } else {
        echo "I dati del modulo non sono stati inviati correttamente.";
    }
} catch(PDOException $e) {
    echo "Errore: " . $e->getMessage();
}
