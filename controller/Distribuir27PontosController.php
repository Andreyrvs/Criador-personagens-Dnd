<?php

class Distribuir27PontosController
{
    private $distribuirPontos;
    private $atributos;

    public function __construct()
    {
        require_once 'model/Distribuir27Pontos.php';
        $this->distribuirPontos = new Distribuir27Pontos();
    }

    public function validar27PontosSessao()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->atributos = array_keys($this->distribuirPontos->getAtributos());
            $erros = FALSE;

            foreach ($this->atributos as $atributo) {
                if (isset($_POST[$atributo])) {
                    $valor = $_POST[$atributo];
                    $success =  $this->distribuirPontos->setAtributo($atributo, $valor);
                    if (!$success) {
                        echo "<br> Valor inválido para $atributo: $valor<br>";
                        $erros = TRUE;
                    }
                }
            }

            if (!$erros) {
                $_SESSION['distribuirPontos'] = serialize($this->distribuirPontos);
                header("Location: view\Racas.php");
                exit();
            }
        }
    }
}
