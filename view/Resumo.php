<?php
session_start();
require_once 'model\Distribuir27Pontos.php'; // Adicionando a inclusão da classe

if (isset($_SESSION['racas'])) {
    $racas = unserialize($_SESSION["racas"]);
}
if (isset($_SESSION['distribuirPontos'])) {
    $distribuirPontos = unserialize($_SESSION['distribuirPontos']);
    $atributos = $distribuirPontos->getAtributos();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resumo.css">
    <title>Resultado</title>
</head>

<body>
    <h1>Resumo</h1>
    <section class="page">
        <section class="card">
            <h1>Personagem</h1>
            <section>
                <span><?php echo $racas ?></span>
            </section>
            <section class="habilidades">
                <section>
                    <p>Força: <span><?php echo $atributos["forca"] ?></span></p>
                </section>
                <section>
                    <p>Destreza: <span><?php echo $atributos["destreza"] ?></span></p>
                </section>
                <section>
                    <p>Constituição: <span><?php echo $atributos["constituicao"] ?></span></p>
                </section>
                <section>
                    <p>Inteligência: <span><?php echo $atributos["inteligencia"] ?></span></p>
                </section>
                <section>
                    <p>Sabedoria: <span><?php echo $atributos["sabedoria"] ?></span></p>
                </section>
                <section>
                    <p>Carisma: <span><?php echo $atributos["carisma"] ?></span></p>
                </section>
            </section>
        </section>
    </section>

    <?php
    foreach ($_SERVER as $key => $value) {
        echo "{$key} {$value} <br>";
    }
    ?>
    <hr>
    <?php
    echo "<h3>Atributos:</h3>";
    echo "<ul>";
    foreach ($distribuirPontos->getAtributos() as $atributo => $valor) {
        echo "<li>$atributo: $valor</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>