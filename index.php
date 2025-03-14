<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>password generator</title>
</head>
<body>
    <header class="header"><?php require "./partials/header.php"; ?></header>
    <form action="password.php" method="POST" class="containerform">

        <label for="username">Nome utente</label><br>
        <input type="text" id="username" name="username"><br>

        <label for="password">Lunghezza password</label><br>
        <input type="number" id="password" name="password"><br>

        <div class="checkbox">
            <input type="checkbox" id="min" name="min">
            <label for="min">lettere minuscole</label><br>
        </div>

        <div class="checkbox">
        <input type="checkbox" id="mai" name="mai">
        <label for="mai">LETTERE MAIUSCOLE</label><br>
        </div> 

        <div class="checkbox">
        <input type="checkbox" id="num" name="num">
        <label for="num">Numeri</label><br>
        </div>

        <div class="checkbox">
        <input type="checkbox" id="spec" name="spec">
        <label for="spec">Caratteri speciali</label><br>
        </div>

        <button class="button" type="submin">Invia</input>
    </form>
    <footer class="footer"><?php require "./partials/footer.php"; ?><footer>
</body>
</html>