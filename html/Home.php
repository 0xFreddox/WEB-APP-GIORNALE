<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/home.css" />
    <title>Pubblicazioni</title>
</head>
<body>
    <?php
        include '../php/config-db.php';
        include '../php/header.php';
        try {
            $query = "SELECT titolo, PeriodicitaPubb, ArgomentoPubblicazione FROM Pubblicazioni";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $pubblicazioni = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Errore: " . $e->getMessage();
        }
    ?>
        <?php
          foreach ($pubblicazioni as $pubblicazione) {
            echo '<div class="Articolo-Box">';
            echo '<p>' . $pubblicazione['titolo'] . '</p>';
            echo '<p>' . $pubblicazione['ArgomentoPubblicazione'] . '</p>';
            echo '<p>' . $pubblicazione['PeriodicitaPubb'] . '</p>';
            echo '<img src="#">';
            echo '</div>';
        }        
        ?>
    </div>
</body>
</html>
