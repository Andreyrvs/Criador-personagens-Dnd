<?php
// Iniciar a sessão
session_start();
require_once "./model/Distribuir27Pontos.php";

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'controller/Distribuir27PontosController.php';
}

$distribuirPontos = new Distribuir27Pontos();
$atributos = $distribuirPontos->getAtributos();
$pontosDisponiveis = $distribuirPontos->getPontosDisponiveis();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Criação de Personagem Dnd</title>

</head>

<body>
    <h1>Criador de Personagem Dnd</h1>
    <section class="page">
        <div class="card">
            <form action="index.php" method="post">
                <p class="text">Escolha os Atributos</p>
                <section class="distribuir-pontos">
                    <?php foreach ($atributos as $atributo => $valor): ?>
                        <section class="input-label">
                            <label for="<?php echo $atributo; ?>"><?php echo $atributo; ?></label>
                            <input type="number" name="<?php echo $atributo; ?>" id="<?php echo $atributo; ?>" min="0" max="15" required <?php echo $atributo === 'forca' ? 'autofocus' : ''; ?>>
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
                                    <?php foreach ($distribuirPontos->getCustoAtributo() as $valor => $custo) : ?>
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
                        <button type="submit">Enviar</button>
                    </section>
                </section>
            </form>
        </div>
    </section>
</body>

</html>