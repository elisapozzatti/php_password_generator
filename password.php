<?php

function getRandomString($n) {

    $characters = '';

    #checkbox min selezionata
    if (isset($_POST['min']) && $_POST['min'] == "on") {
        $characters = $characters.'abcdefghijklmnopqrstuvwxyz';
    }

    #checkbox mai selezionata
    if (isset($_POST['mai']) && $_POST['mai'] == "on") {
        $characters = $characters.'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    #checkbox num selezionata
    if (isset($_POST['num']) && $_POST['num'] == "on") {
        $characters = $characters.'0123456789';
    }
    
    #checkbox spec selezionata
    if (isset($_POST['spec']) && $_POST['spec'] == "on") {
        $characters = $characters.'!#$%&()*+,-./:;<=>?@[\]^_`{|}~';
    }

    #nessuna checkbox selezionata
    if (!isset($_POST['min']) && !isset($_POST['max']) && !isset($_POST['num']) && !isset($_POST['spec'])) {
        $characters = 'error';
    }

    if ($characters == 'error') {
        return 'error';
    }

    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = random_int(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
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