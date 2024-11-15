<?php

class Distribuir27Pontos
{
    private $pontosDisponiveis = 27;
    private $pontosFinais = array();
    private $modificadoresDeHabilidades = array(
        8 => -1,
        9 => -1,
        10 => 0,
        11 => 0,
        12 => 1,
        13 => 1,
        14 => 2,
        15 => 2,
        16 => 3,
        17 => 3,
        18 => 4,
        19 => 4,
    );

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

    public function setAtributo($atributo, $valor)
    {
        if (array_key_exists($atributo, $this->atributos)) {
            if ($valor >= 8 && $valor <= 15) {
                $custoAtual = $this->custoAtributo[$this->atributos[$atributo]];
                $novoCusto = $this->custoAtributo[$valor];
                $pontosNecessarios = $novoCusto - $custoAtual;
                if ($pontosNecessarios <= $this->pontosDisponiveis) {
                    $this->pontosDisponiveis -= $pontosNecessarios;
                    $this->atributos[$atributo] = $valor;
                    return true;
                }
            }
        }
        return false;
    }
    public function getAtributos()
    {
        return $this->atributos;
    }
    public function getPontosDisponiveis()
    {
        return $this->pontosDisponiveis;
    }
    public function getCustoAtributo()
    {
        return $this->custoAtributo;
    }
    public function setModificadores()
    {
        $this->pontosFinais = array();
        foreach ($this->atributos as $key => $value) {
            $modificador = $this->modificadoresDeHabilidades[$value] ?? 0;
            $this->pontosFinais[$key] = $value + $modificador;
        }
    }

    public function getModificadores()
    {
        return $this->pontosFinais;
    }

    public function setPontosVida($atributosFinais)
    {
        $constituicao = $atributosFinais["Constituição"];
        return $this->modificadoresDeHabilidades[$constituicao] + 10;
    }
}
