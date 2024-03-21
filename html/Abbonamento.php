<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Abbonamenti.css" />
    <title>Abbonamento</title>
</head>
<body>
    <?php
        session_start();
        include '../php/config-db.php';
        include '../php/common.php';

        if(!check_user_logged_in()){
            header("Location: login.php");
            exit(); 
        }

        try {
            $query = "SHOW COLUMNS FROM Abbonamenti LIKE 'Periodicita'";
            $stmt = $conn->prepare($query);
            $stmt->execute(); 
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $enum_values = explode("','", substr($row['Type'], 6, -2)); // Extract enum values correctly
        } catch(PDOException $e) {
            echo "Errore: " . $e->getMessage();
        }
    ?>

    <form action="../php/compra_abbonamento.php" method="post">
        <div class="container">
            <h3>Seleziona un abbonamento</h3>
            <select name="Periodicita" id="Periodicita" class="select-abbonamenti">
                <?php
                    if(isset($enum_values)) {
                        foreach ($enum_values as $value) {
                            echo '<option value="' . $value . '">' . $value . '</option>';
                        }
                    } else {
                        echo '<option value="">Nessuna opzione disponibile</option>'; // Provide a message if no options found
                    }
                ?>
            </select>
            <button type="submit" class="btn">Acquista</button>
        </div>
    </form>
</body>
</html>
