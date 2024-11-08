<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'controller/RacasController.php';
}

$racas_lista = array(
    "Alto Elfo" => "Inteligência (+1)",
    "Anao" => "Constituição (+2)",
    "Anao da Colina" => "Sabedoria (+1)",
    "Anao da Montanha" => "Força (+2)",
    "Draconato" => "Força (+2) Carisma (+1)",
    "Drow" => "Carisma (+1)",
    "Elfo" => "Destreza (+2)",
    "Elfo da Floresta" => "Sabedoria (+1)",
    "Gnomo" => "Inteligência (+2)",
    "Gnomo da Floresta" => "Destreza (+1)",
    "Gnomo das Rochas" => "Constituição (+1)",
    "Halfling" => "Destreza (+2)",
    "Halfling Pés Leves" => "Carisma (+1)",
    "Halfling Robusto" => "Constituição (+1)",
    "Humano" => "Todos (+1,+1,+1,+1,+1,+1)",
    "Meio Elfo" => "Carisma (+2)",
    "Meio Orc" => "Força(+2) Constituição (+1)",
    "Tiefling" => "Inteligência(+1) Carisma (+2)"
);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/racas.css">
    <title>Raças</title>
</head>

<body>
    <h1>Raças</h1>
    <form action="Racas.php" method="post">
        <section class="main-formulario">
            <section class="formulario">
                <label for="racas">Selecione uma raça: </label>
                <select id="racas" name="racas" required>
                    <option value="" selected disabled>Opções</option>
                    <?php foreach ($racas_lista as $raca => $valor): ?>
                        <option value="<?php echo $raca ?>"> <?php echo $raca ?> </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Enviar</button>
            </section>
        </section>
    </form>
    <section class="tabela-racas">
        <table>
            <thead>
                <caption>
                    Súmario: Valores de Habilidade
                </caption>
                <tr class="cabeçalho">
                    <th>Raças</th>
                    <th>Aprimoramentos Raciais:</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($racas_lista as $raca => $valor): ?>
                    <tr>
                        <td> <?php echo $raca ?> </td>
                        <td> <?php echo $valor ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>

</html>