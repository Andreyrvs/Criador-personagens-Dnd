<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class Draconato implements Racas
{
    private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 2,
            "Destreza" => 0,
            "Constituição" => 0,
            "Inteligência" => 0,
            "Sabedoria" => 0,
            "Carisma" => 1,
        );
    }

    public function getAtributos()
    {
        return $this->atributos;
    }

    public function getNome()
    {
        return "Draconato";
    }
    public function getAprimoramento()
    {
        return "Força (+2) Carisma (+1)";
    }
}
