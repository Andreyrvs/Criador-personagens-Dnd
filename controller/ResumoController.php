<?php

class ResumoController
{
    private $raca;
    private $pontosFinaisComBonus;
    private $pontosVida;
    private $atributosRaca;
    private $modificado;
    private $modificadores;
    private $distribuirPontos;

    public function __construct()
    {
        require_once 'model/Distribuir27Pontos.php';
        require_once "model/AplicarBonusRaca.php";

        spl_autoload_register(function ($class_name) {
            $file = __DIR__ . '/../model/Racas/' . $class_name . '.php';
            if (file_exists($file)) {
                require_once $file;
            }
        });
    }

    public function processarDados()
    {
        $this->validarRacaSessao();
        $this->validarCaminhoDoArquivo();
        $this->validarDistribuir27PontosSessao();

        return [
            'raca' => $this->raca,
            'pontosFinaisComBonus' => $this->pontosFinaisComBonus,
            'pontosVida' => $this->pontosVida,
            'atributosRaca' => $this->atributosRaca,
            'modificado' => $this->modificado
        ];
    }

    public function validarRacaSessao()
    {
        if (isset($_SESSION['racas'])) {
            $this->raca = unserialize($_SESSION['racas']);
        } else {
            echo "Nenhuma raça selecionada.";
            exit();
        }
    }

    public function validarCaminhoDoArquivo()
    {
        if ($this->raca && class_exists($this->raca->getNome())) {
            $caminhoRaca = __DIR__ . '/../model/Racas/' . $this->raca->getNome() . '.php';
            if (file_exists($caminhoRaca)) {
                require_once $caminhoRaca;
            }
            $this->atributosRaca = $this->raca->getAtributos();
        } else {
            echo "Classe da raça não encontrada.";
            exit();
        }
    }

    public function validarDistribuir27PontosSessao()
    {
        if (isset($_SESSION['distribuirPontos'])) {
            $this->distribuirPontos = unserialize($_SESSION['distribuirPontos']);
            $this->distribuirPontos->setModificadores();
            $this->modificado = $this->distribuirPontos->getModificadores();
        } else {
            echo "Nenhuma distribuição de pontos encontrada.";
            exit();
        }

        $aplicarBonusRaca = new AplicarBonusRaca($this->distribuirPontos);
        $this->pontosFinaisComBonus = $aplicarBonusRaca->aplicarBonus($this->raca);
        $this->pontosVida = $this->distribuirPontos->setPontosVida($this->pontosFinaisComBonus);
    }
}
