<!DOCTYPE html>
<html>
    <head>
        <title>Registrazione giornale</title>
        <link rel="stylesheet" type="text/css" href="../css/registrazione.css" />
    </head>
    <body>
        <div class="container">
            <h2>Registrazione Giornale</h2>
            <form action="../php/registrazione-giornale.php" method="POST">
                <div class="input-group">
                    <label for="username">Email</label>
                    <input id="email" name="email" type="email" placeholder="Email...">
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username...">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password...">
                </div>
                <button type="submit" class="btn">Registrati</button>
            </form>
        </div>
        <?php
            include '../php/footer.php';
        ?>
    </body>
</html>