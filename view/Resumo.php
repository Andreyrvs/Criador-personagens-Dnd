<?php
session_start();
require_once 'controller/ResumoController.php';

$controller = new ResumoController();
$dados = $controller->processarDados();

extract($dados);

function adicionarEspacos($string)
{
    return preg_replace('/([a-z])([A-Z])/u', '$1 $2', $string);
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
    <header>
        <h1>Personagem</h1>
    </header>
    <main class="page">

        <section class="card">
            <?php if (isset($raca)): ?>
                <section>
                    <h2><?php echo adicionarEspacos($raca->getNome()); ?></h2>
                </section>
            <?php endif; ?>

            <section class="habilidades">
                <h4>Atributos</h4>
                <?php if (isset($pontosFinaisComBonus)): ?>
                    <ul>
                        <?php foreach ($pontosFinaisComBonus as $atributo => $valor): ?>
                            <li><?php echo "{$atributo} : {$valor}" ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if (isset($pontosVida)): ?>
                    <section>
                        <p>Pontos de Vida: <span><?php echo $pontosVida ?></span></p>
                    </section>
                <?php endif; ?>

                <?php if (isset($atributosRaca)): ?>
                    <p>Aprimoramentos raciais</p>
                    <ul>
                        <?php foreach ($atributosRaca as $tes => $res): ?>
                            <?php if ($res !== 0): ?>
                                <li><?php echo $tes . ' ' . $res; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </section>

            <?php if (isset($modificado)): ?>
                <section>
                    <p>Antes do bônus de raça:</p>
                    <ul>
                        <?php foreach ($modificado as $key => $value): ?>
                            <li><?php echo $key . ' ' . $value ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            <?php endif; ?>
        </section>

    </main>
</body>

</html>