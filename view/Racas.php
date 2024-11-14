<?php
session_start();
require_once 'controller/RacasController.php';
$controller = new RacasController();
$controller->selecionarRaca();

$racas_lista = array(
    "AltoElfo" => "Inteligência (+1)",
    "Anao" => "Constituição (+2)",
    "AnaoDaColina" => "Sabedoria (+1)",
    "AnaoDaMontanha" => "Força (+2)",
    "Draconato" => "Força (+2) Carisma (+1)",
    "Drow" => "Carisma (+1)",
    "Elfo" => "Destreza (+2)",
    "AnaoDaMontanha" => "Sabedoria (+1)",
    "Gnomo" => "Inteligência (+2)",
    "GnomoDaFloresta" => "Destreza (+1)",
    "GnomoDasRochas" => "Constituição (+1)",
    "Halfling" => "Destreza (+2)",
    "HalflingPesLeves" => "Carisma (+1)",
    "HalflingRobusto" => "Constituição (+1)",
    "Humano" => "Todos (+1,+1,+1,+1,+1,+1)",
    "MeioElfo" => "Carisma (+2)",
    "MeioOrc" => "Força(+2) Constituição (+1)",
    "Tiefling" => "Inteligência(+1) Carisma (+2)"
);

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
    <link rel="stylesheet" href="/css/racas.css">
    <title>Raças</title>
</head>

<body>
    <h1>Raças</h1>
    <form action="Racas.php" method="post">
        <section class="main-formulario">
            <section class="formulario">
                <label for="raca">Selecione uma raça: </label>
                <select id="raca" name="raca" required>
                    <option value="" selected disabled>Opções</option>
                    <?php foreach ($racas_lista as $raca => $valor): ?>
                        <?php echo $valor ?>
                        <option value="<?php echo $raca ?>"> <?php echo adicionarEspacos($raca) ?> </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" value="Selecionar Raça">Enviar</button>
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
                        <td> <?php echo adicionarEspacos($raca) ?> </td>
                        <td> <?php echo $valor ?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>

</html>