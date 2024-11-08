<?php
session_start();
require_once 'model\Distribuir27Pontos.php'; // Adicionando a inclusão da classe

if (isset($_SESSION['racas'])) {
    $raca = unserialize($_SESSION["racas"]);
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
            <h2>Personagem</h2>
            <section>
                <p><?php echo $raca ?></p>
            </section>
            <section class="habilidades">
                <h3>Atributos</h3>
                <?php foreach ($distribuirPontos->getAtributos() as $atributo => $valor): ?>
                    <ul>
                        <li>
                            <?php echo "{$atributo} : {$valor}" ?>
                        </li>
                    </ul>
                <?php endforeach ?>
            </section>
        </section>
    </section>


</body>

</html>