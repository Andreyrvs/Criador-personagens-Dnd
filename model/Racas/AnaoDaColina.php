<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class AnaoDaColina implements Racas
{
    private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 0,
            "Destreza" => 0,
            "Constituição" => 0,
            "Inteligência" => 0,
            "Sabedoria" => 1,
            "Carisma" => 0,
        );
    }

    public function getAtributos()
    {
        return $this->atributos;
    }

    public function getNome()
    {
        return "AnaoDaColina";
    }
    public function getAprimoramento()
    {
        return "Sabedoria (+1)";
    }
}
