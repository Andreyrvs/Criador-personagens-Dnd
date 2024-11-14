<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class HalflingRobusto implements Racas
{
    private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 0,
            "Destreza" => 0,
            "Constituição" => 1,
            "Inteligência" => 0,
            "Sabedoria" => 0,
            "Carisma" => 0,
        );
    }

    public function getAtributos()
    {
        return $this->atributos;
    }

    public function getNome()
    {
        return "HalflingRobusto";
    }
    public function getAprimoramento()
    {
        return "Constituição (+1)";
    }
}
