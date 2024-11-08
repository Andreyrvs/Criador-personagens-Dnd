<?php

class Distribuir27Pontos
{
    private $pontosDisponiveis = 27;
    private $custoAtributo = array(
        8 => 0,
        9 => 1,
        10 => 2,
        11 => 3,
        12 => 4,
        13 => 5,
        14 => 7,
        15 => 9
    );
    private $atributos = array(
        'Força' => 8,
        'Destreza' => 8,
        'Constituição' => 8,
        'Inteligência' => 8,
        'Sabedoria' => 8,
        'Carisma' => 8,
    );

    public function setAtributo($atributos, $valor)
    {
        if (array_key_exists($atributos, $this->atributos)) {
            if ($valor >= 8 && $valor <= 15) {
                if ($this->custoAtributo[$valor] <= $this->pontosDisponiveis) {
                    $this->pontosDisponiveis = $this->pontosDisponiveis - $this->custoAtributo[$valor];
                    $this->atributos[$atributos] = $valor;
                    return true;
                }
            }
        }
        return false;
    }

    public function getPontosDisponiveis()
    {
        return $this->pontosDisponiveis;
    }

    public function getAtributos()
    {
        return $this->atributos;
    }
    public function getCustoAtributo()
    {
        return $this->custoAtributo;
    }
}
