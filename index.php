<?php
session_start();
require_once 'controller/Distribuir27PontosController.php';

$controller = new Distribuir27PontosController();
$controller->validar27PontosSessao();

$atributos = $controller->getAtributos();
$pontosDisponiveis = $controller->getPontosDisponiveis();
$custoAtributo = json_encode($controller->getCustoAtributo());
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Criação de Personagem Dnd</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const atributoInputs = document.querySelectorAll('.distribuir-pontos input[type="number"]');
            const pontosRestantes = document.querySelector('.total-pontos p');
            const custoAtributo = <?php echo $custoAtributo; ?>;
            atributoInputs.forEach(input => {
                input.addEventListener('blur', function() {
                    calcularPontos();
                });
                input.addEventListener('input', function() {
                    calcularPontos();
                });
            });

            function calcularPontos() {
                let pontosDisponiveis = 27;
                atributoInputs.forEach(input => {
                    const valor = parseInt(input.value);
                    if (valor >= 8 && valor <= 15) {
                        pontosDisponiveis -= custoAtributo[valor];
                    }
                });
                pontosRestantes.textContent = 'Restam ' + pontosDisponiveis;
            }
        });
    </script>

</head>

<body>
    <header>
        <h1>Criador de Personagem Dnd</h1>
    </header>
    <main class="page">

        <section class="card">
            <form action="index.php" method="post">
                <p class="text">Escolha os Atributos</p>

                <section class="distribuir-pontos">
                    <?php foreach ($atributos as $atributo => $valor): ?>
                        <section class="input-label">
                            <label for="<?php echo $atributo; ?>"><?php echo $atributo; ?></label>
                            <input type="number" name="<?php echo $atributo; ?>" id="<?php echo $atributo; ?>" min="8" max="15" required <?php echo $atributo === 'forca' ? 'autofocus' : ''; ?>>
                        </section>
                    <?php endforeach; ?>
                </section>

                <section class="limitacao-pontos">
                    <section class="min-max">
                        <p>Min: 8</p>
                        <p>Max: 15</p>
                    </section>
                    <section class="total-pontos">
                        <p>Restam <?php echo $pontosDisponiveis ?></p>
                    </section>
                </section>

                <section class="lista-custos">
                    <section class='footer'>
                        <p>Pontos de Habilidade:</p>

                        <section>
                            <section class="custos">
                                <small>valor</small>
                                <small>-</small>
                                <small>custo</small>
                            </section>

                            <section class="valores">
                                <ul>
                                    <?php foreach (json_decode($custoAtributo, true) as $valor => $custo) : ?>
                                        <li class='valor'>
                                            <span><?php echo $valor ?> </span>
                                            <span>-</span>
                                            <span><?php echo $custo ?></span>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </section>

                        </section>

                    </section>

                    <section class="botao">
                        <button type="submit">Criar</button>
                    </section>

                </section>
            </form>
        </section>