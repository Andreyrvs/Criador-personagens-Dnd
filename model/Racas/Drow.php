<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class Drow implements Racas
{
    private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 0,
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
        return "Drow";
    }
    public function getAprimoramento()
    {
        return "Carisma (+1)";
    }
}
