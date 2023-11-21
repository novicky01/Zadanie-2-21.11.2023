<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title-box">
            <h1>Logowanie</h1>
        </div>
        <div class="input-box">
            <form method="post">
                <input name="username" id="username" type="text" placeholder="login" required>
                <input name="password" id="password" type="password" placeholder="password" required>
                <button id="button-login">Zaloguj</button>
            </form>
        </div>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usernameInput = $_POST["username"];
            $passwordInput = $_POST["password"];
            if ($usernameInput === "admin" && $passwordInput === "test") {
                $notify = "Zalogowano pomyślnie";
                echo "<script type='text/javascript'>alert('$notify');</script>";
            } 
            else {
                $notify = "Zalogowano pomyślnie";
                echo "<script type='text/javascript'>alert('$notify');</script>";
            }
        }
    ?>

</body>
</html>






















                                                                                                                                                                                                                                                                                                                                                                                      <!-- WIKTOR NOWICKI -->