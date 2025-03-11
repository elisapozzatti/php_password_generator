<?php
require_once 'functions/functions.php';
?>

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
    <section class="containerform">
        <h2>Ciao, <?php echo $_POST['username']?></h2>
        <p>La tua password sicura è:</p>
        <p id="pass"><?php echo getRandomString($_POST['password']) ?></p>
        <button class="button" onclick="copiaTesto()">Copia password</button>
        <script>
            function copiaTesto() {
                let testo = document.getElementById("pass").innerText;
                navigator.clipboard.writeText(testo);
            }
        </script>
    </section>
</body>
</html>