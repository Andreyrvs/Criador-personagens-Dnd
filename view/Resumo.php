<?php
session_start();
// Auto loader
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/../model/Racas/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

require_once 'model\Distribuir27Pontos.php';

if (isset($_SESSION['racas'])) {
    $raca = unserialize($_SESSION["racas"]);
    if (class_exists($raca->getNome())) {
        $caminhoRaca = "model/Racas/{$raca->getNome()}.php";
        if (file_exists($caminhoRaca)) {
            require_once $caminhoRaca;
        }
        $atributosRaca = $raca->getAtributos();
    } else {
        echo "Classe da raça não encontrada.";
    }
} else {
    echo "Nenhuma raça selecionada.";
}

if (isset($_SESSION['distribuirPontos'])) {
    $distribuirPontos = unserialize($_SESSION['distribuirPontos']);
    $atributosDistribuidos = $distribuirPontos->getAtributos();
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
                <h3><?php echo $raca->getNome(); ?></h3>
            </section>
            <section class="habilidades">
                <h4>Atributos</h4>
                <ul>
                    <?php foreach ($atributosDistribuidos as $atributo => $valor): ?>
                        <li>
                            <?php echo "{$atributo} : {$valor}" ?>
                        </li>
                    <?php endforeach ?>
                </ul>
                <?php foreach ($atributosRaca as $tes => $res): ?>
                    <span>
                        <?php echo $tes  . $res . "<br>" ?>
                    </span>
                <?php endforeach ?>
            </section>
        </section>
    </section>


</body>

</html>