<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Abbonamenti.css" />
    <title>Abbonamento</title>
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

    <form action="../php/compra_abbonamento.php" method="post">
        <div class="container">
            <h3>Seleziona un abbonamento</h3>
            <select name="Periodicita" id="Periodicita" class="select-abbonamenti">
                <?php
                    foreach ($enum_values as $value) {
                        echo '<option value="' . $value . '">' . $value . '</option>';
                    }
                ?>
            </select>
            <button type="submit" class="btn">Acquista</button>
        </div>
    </form>
</body>
</html>
