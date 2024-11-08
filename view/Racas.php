<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'controller/RacasController.php';
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
                <label for="racas">Selecione uma raça: </label>
                <select id="racas" name="racas" required>
                    <option value="" selected disabled>Opções</option>
                    <option value="Alto Elfo">Alto Elfo</option>
                    <option value="Anao">Anao</option>
                    <option value="Anao da Colina">Anao da Colina</option>
                    <option value="Anao da Montanha">Anao da Montanha</option>
                    <option value="Draconato">Draconato</option>
                    <option value="Drow">Drow</option>
                    <option value="Elfo">Elfo</option>
                    <option value="Elfo da Floresta">Elfo da Floresta</option>
                    <option value="Gnomo">Gnomo</option>
                    <option value="Gnomo da Floresta">Gnomo da Floresta</option>
                    <option value="Gnomo das Rochas">Gnomo das Rochas</option>
                    <option value="Halfling">Halfling</option>
                    <option value="Halfling PesLeves">Halfling PesLeves</option>
                    <option value="Halfling Robusto">Halfling Robusto</option>
                    <option value="Humano">Humano</option>
                    <option value="Meio Elfo">Meio Elfo</option>
                    <option value="Meio Orc">Meio Orc</option>
                    <option value="Tiefling">Tiefling</option>
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
                <tr>
                    <td>Alto Elfo</td>
                    <td>Inteligência (+1)</td>
                </tr>
                <tr>
                    <td>Anao</td>
                    <td> Constituição (+2)</td>
                </tr>
                <tr>
                    <td>Anao da Colina</td>
                    <td>Sabedoria (+1)</td>
                </tr>
                <tr>
                    <td>Anao da Montanha</td>
                    <td>Força (+2)</td>
                </tr>
                <tr>
                    <td>Draconato</td>
                    <td>Força (+2) Carisma (+1)</td>
                    <p></p>
                </tr>
                <tr>
                    <td>Drow</td>
                    <td>Carisma (+1)</td>
                </tr>
                <tr>
                    <td>Elfo</td>
                    <td>Destreza (+2)</td>
                </tr>
                <tr>
                    <td>Elfo da Floresta</td>
                    <td>Sabedoria (+1)</td>
                </tr>
                <tr>
                    <td>Gnomo</td>
                    <td>Inteligência (+2)</td>
                </tr>
                <tr>
                    <td>Gnomo da Floresta</td>
                    <td>Destreza (+1)</td>
                </tr>
                <tr>
                    <td>Gnomo das Rochas</td>
                    <td>Constituição (+1)</td>
                </tr>
                <tr>
                    <td>Halfling</td>
                    <td>Destreza (+2)</td>
                </tr>
                <tr>
                    <td>Halfling Pés Leves</td>
                    <td>Carisma (+1)</td>
                </tr>
                <tr>
                    <td>Halfling Robusto</td>
                    <td>Constituição (+1)</td>
                </tr>
                <tr>
                    <td>Humano</td>
                    <td>
                        Todos (+1)
                    </td>
                </tr>
                <tr>
                    <td>Meio Elfo</td>
                    <td>Carisma (+2)</td>
                </tr>
                <tr>
                    <td>Meio Orc</td>
                    <td>Força(+2) Constituição (+1)</td>
                </tr>
                <tr>
                    <td>Tiefling</td>
                    <td>inteligência(+1) Carisma(+2)</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>

</html>