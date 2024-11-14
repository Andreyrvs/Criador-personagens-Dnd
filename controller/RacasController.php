<?php
class RacasController
{
    private $racaSelecionada;
    private $caminhoRaca;
    private $classeRaca;

    public function __construct()
    {
        require_once "model/Racas/interface/InterfaceRaca.php";
    }

    public function selecionarRaca()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['raca'])) {
            $this->racaSelecionada = $_POST['raca'];
            $this->caminhoRaca = "model/Racas/{$this->racaSelecionada}.php";
            if (file_exists($this->caminhoRaca)) {
                require_once $this->caminhoRaca;
                $this->classeRaca = new $this->racaSelecionada();
                $_SESSION['racas'] = serialize($this->classeRaca);

                header("Location: Resumo.php");
                exit();
            } else {
                echo "Raça não encontrada.";
            }
        }
    }
}
