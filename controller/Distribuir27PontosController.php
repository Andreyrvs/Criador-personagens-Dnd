<?php

class Distribuir27PontosController
{

    public function __construct()
    {
        require_once 'model/Distribuir27Pontos.php';
    }

    public function validar27PontosSessao()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $distribuirPontos = new Distribuir27Pontos();
            $atributos = array_keys($distribuirPontos->getAtributos());
            $erros = FALSE;

            foreach ($atributos as $atributo) {
                if (isset($_POST[$atributo])) {
                    $valor = $_POST[$atributo];
                    $success = $distribuirPontos->setAtributo($atributo, $valor);
                    if (!$success) {
                        echo "<br> Valor inválido para $atributo: $valor<br>";
                        $erros = TRUE;
                    }
                }
            }

            if (!$erros) {
                $_SESSION['distribuirPontos'] = serialize($distribuirPontos);
                header("Location: view\Racas.php");
                exit();
            }
        }
    }
}
