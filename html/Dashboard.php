<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include '../php/config-db.php';
    session_start();
    try {
        $query = "SHOW COLUMNS FROM Abbonamenti LIKE 'Periodicita'";
        $stmt = $conn->prepare($query);
        $stmt->execute(); 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $enum_values = explode("','", preg_replace("/(enum|set)\('(.+?)'\)/", "\\2", $row['Type']));
    } catch(PDOException $e) {
        echo "Errore: " . $e->getMessage();
    }
?>
<div class="container mt-5">
    <h2>Aggiungi Pubblicazione</h2>
    <form action="../php/aggiungi_pubblicazione.php" method="POST">
        <div class="form-group">
            <label for="titolo">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
            <label for="argomento">Argomento</label>
            <input type="text" class="form-control" id="argomento" name="ArgomentoPubb" placeholder="Inserisci l'argomento">
        </div>
        <div class="form-group">
            <label for="periodicita">Periodicità</label>
            <select class="form-control" id="periodicita" name="PeriodicitaPubb">
            <?php
                foreach ($enum_values as $value) {
                    echo '<option value="' . $value . '">' . $value . '</option>';
                }
            ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
</body>
</html>
