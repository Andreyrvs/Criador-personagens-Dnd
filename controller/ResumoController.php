<?php

include_once 'model/Racas.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $erros = FALSE;
    $chaveRaca = $_POST['racas'];
    if (isset($_POST['racas'])) {
        if (!$chaveRaca) {
            echo "<br> Raça inválida para $chaveRaca<br>";
            $erros = TRUE;
        } #else
        # echo "<br> $chaveRaca ok<br>";
    }
}

if (!$erros) {
    $_SESSION['racas'] = serialize($chaveRaca);
    header("Location: Resumo.php");
    exit();
}
