<?php
require_once "Distribuir27Pontos.php";

class AplicarBonusRaca
{
    private $distribuirPontos;

    public function __construct($distribuirPontos)
    {
        $this->distribuirPontos = $distribuirPontos;
    }

    public function aplicarBonus($raca)
    {
        $atributosRaca = $raca->getAtributos();
        $pontosFinais = $this->distribuirPontos->getModificadores();

        foreach ($atributosRaca as $atributo => $bonus) {
            if (isset($pontosFinais[$atributo])) {
                $pontosFinais[$atributo] += $bonus;
            } else {
                $pontosFinais[$atributo] = $bonus;
            }
        }

        $this->distribuirPontos->setModificadores();
        return $pontosFinais;
    }
}
