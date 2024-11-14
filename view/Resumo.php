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
    <title>Resumo</title>
</head>

<body>
    <header>
        <h1>Personagem</h1>
    </header>
    <main class="page">

        <section class="card">
            <section>
                <?php if (isset($raca)): ?>
                    <h2><?php echo adicionarEspacos($raca->getNome()); ?></h2>
                <?php endif; ?>
            </section>

            <section class="habilidades">
                <h4>Atributos:</h4>
                <section id="habilidades">

                    <?php if (isset($pontosFinaisComBonus)): ?>
                        <ul>
                            <?php foreach ($pontosFinaisComBonus as $atributo => $valor): ?>
                                <li><?php echo "{$atributo} : {$valor}" ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </section>

                <section class="aprimoramentos">
                    <?php if (isset($atributosRaca)): ?>
                        <span>Aprimoramentos raciais</span>
                        <ul>
                            <?php foreach ($atributosRaca as $atributo => $valor): ?>
                                <?php if ($valor !== 0): ?>
                                    <li><?php echo $atributo . ' +' . $valor; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </section>

                <section id="Pts vida">
                    <?php if (isset($pontosVida)): ?>
                        <p>Pontos de Vida: <span><?php echo $pontosVida ?></span></p>
                    <?php endif; ?>
                </section>
                <button class="home"><a href="../index.php">Pagina inicial</a></button>
            </section>
        </section>
    </main>
</body>

</html>