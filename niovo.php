<?php
session_start();
require_once "model\Distribuir27Pontos.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "controller\Distribuir27PontosController.php";
}
$distribuirPontos = new Distribuir27Pontos();
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
                    <section class="input-label">
                        <label for="forca">Força</label>
                        <input type="number" name="forca" id="forca" min="0" max="15" required autofocus>
                    </section>
                    <section class="input-label">
                        <label for="destreza">Destreza</label>
                        <input type="number" name="destreza" id="destreza" min="0" max="15" required>
                    </section>
                    <section class="input-label">
                        <label for="constituicao">Constituição</label>
                        <input type="number" name="constituicao" id="constituicao" min="0" max="15" required>
                    </section>
                    <section class="input-label">
                        <label for="inteligencia">Inteligência</label>
                        <input type="number" name="inteligencia" id="inteligencia" min="0" max="15" required>
                    </section>
                    <section class="input-label">
                        <label for="sabedoria">Sabedoria</label>
                        <input type="number" name="sabedoria" id="sabedoria" min="0" max="15" required>
                    </section>
                    <section class="input-label">
                        <label for="carisma">Carisma</label>
                        <input type="number" name="carisma" id="carisma" min="0" max="15" required>
                    </section>
                </section>
                <section class="limitacao-pontos">
                    <section class="min-max">
                        <p>Min: 8</p>
                        <p>Max: 15</p>
                    </section>
                    <section class="total-pontos">
                        <p>Pontos 27</p>
                        <p>Restam <?php echo $distribuirPontos->getPontosDisponiveis(); ?></p>
                    </section>
                </section>
                <section class="lista-custo">
                    <section class='footer'>
                        <p>Pontos de Habilidade:</p>
                        <section class="custo">
                            <section>
                                <span>Valor</span>
                                <span>Custo</span>
                            </section>
                            <section class="valores">
                                <?php
                                echo "<ul>";
                                foreach ($distribuirPontos->getCustoAtributo() as $valor => $custo) {
                                    echo "<li class='valores-numeros'> <span>$valor</span> - <span>$custo</span></li>";
                                }
                                echo "</ul>";
                                ?>
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