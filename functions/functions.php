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
        $characters = $characters.'!#$%&()*+,-./:;=?@[\]^_`{|}~';
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