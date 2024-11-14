<?php
class RacasController
{
    private $racaSelecionada;
    private $caminhoRaca;
    private $raca;

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
                $this->raca = new $this->racaSelecionada();
                $_SESSION['racas'] = serialize($this->raca);

                header("Location: Resumo.php");
                exit();
            } else {
                echo "Raça não encontrada.";
            }
        }
    }
    public function getRacas()
    {
        $racas = [];
        $racaClasses = ['AltoElfo', 'Anao', 'AnaoDaColina', 'AnaoDaMontanha', 'Draconato', 'Drow', 'Elfo', 'ElfoDaFloresta', 'Gnomo', 'GnomoDaFloresta', 'GnomoDasRochas', 'Halfling', 'HalflingPesLeves', 'HalflingRobusto', 'Humano', 'MeioElfo', 'MeioOrc', 'Tiefling'];
        foreach ($racaClasses as $racaClass) {
            $filePath = __DIR__ . "/../model/Racas/{$racaClass}.php";
            if (file_exists($filePath)) {
                require_once $filePath;
                $raca = new $racaClass();
                if ($raca instanceof Racas) {
                    $racas[] = $raca;
                }
            }
        }
        return $racas;
    }
}
