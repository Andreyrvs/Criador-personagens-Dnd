<?php
session_start();
require_once 'controller/RacasController.php';
$controller = new RacasController();
$controller->selecionarRaca();

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
    <header>
        <h1>Raças</h1>
    </header>
    <main class="page">
        <form action="Racas.php" method="post" class="formulario">
            <label for="raca">Selecione uma raça: </label>
            <section class="formulario-interno">
                <select id="raca" name="raca" required>
                    <option value="" selected disabled>Opções</option>
                    <?php foreach ($controller->getRacas() as $raca): ?>
                        <option value="<?php echo $raca->getNome(); ?>"> <?php echo adicionarEspacos($raca->getNome()); ?> </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" value="Selecionar Raça">Criar</button>
            </section>
        </form>

        <section class="tabela-racas">
            <table>
                <thead>
                    <caption>Súmario: Valores de Habilidade</caption>
                    <tr class="cabeçalho">
                        <th>Raças</th>
                        <th>Aprimoramentos Raciais:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->getRacas() as $raca): ?>
                        <tr>
                            <td> <?php echo adicionarEspacos($raca->getNome()); ?> </td>
                            <td> <?php echo $raca->getAprimoramento(); ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>