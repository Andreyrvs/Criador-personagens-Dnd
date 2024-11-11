<?php

include_once 'model/Racas.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $racas = new Racas();
    // $racas->setAprimoramentos($atibutos);

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
