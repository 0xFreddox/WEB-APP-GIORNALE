<!DOCTYPE html>
<html>
    <head>
        <title>Login Giornale</title>
        <link rel="stylesheet" type="text/css" href="../css/login.css" />
    </head>
    <body>
        <div class="container">
            <h2>Login Giornale</h2>
            <form action="../php/login-giornale.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username...">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password...">
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <?php
            include '../php/footer.php';
        ?>
    </body>
</html>