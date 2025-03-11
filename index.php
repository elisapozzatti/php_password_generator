<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore casuale di password</title>
</head>
<body>
    <div>
        <form action="password.php" method="POST">
    
            <label for="username">Nome utente</label><br>
            <input type="text" id="username" name="username"><br>
    
            <label for="password">Lunghezza password</label><br>
            <input type="number" id="password" name="password"><br>
    
            <input type="checkbox" id="min" name="min">
            <label for="min">lettere minuscole</label><br>
    
            <input type="checkbox" id="mai" name="mai">
            <label for="mai">LETTERE MAIUSCOLE</label><br>
    
            <input type="checkbox" id="num" name="num">
            <label for="num">Numeri</label><br>
    
            <input type="checkbox" id="spec" name="spec">
            <label for="spec">Caratteri speciali</label><br>
    
            <button type="submin">Invia</input>
        </form>
    </div>
</body>
</html>