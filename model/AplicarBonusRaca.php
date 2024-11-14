<?php

class AplicarBonusRaca
{
    private $distribuirPontos;
    private $atributosRaca;
    private $pontosFinais;
    public function __construct($distribuirPontos)
    {
        require_once "Distribuir27Pontos.php";
        $this->distribuirPontos = $distribuirPontos;
    }

    public function aplicarBonus($raca)
    {
        $this->atributosRaca = $raca->getAtributos();
        $this->pontosFinais = $this->distribuirPontos->getModificadores();

        foreach ($this->atributosRaca as $atributo => $bonus) {
            if (isset($this->pontosFinais[$atributo])) {
                $this->pontosFinais[$atributo] += $bonus;
            } else {
                $this->pontosFinais[$atributo] = $bonus;
            }
        }

        $this->distribuirPontos->setModificadores();
        return  $this->pontosFinais;
    }
}
