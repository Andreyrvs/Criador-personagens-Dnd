<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class GnomoDaFloresta implements Racas
{
    private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 0,
            "Destreza" => 1,
            "Constituição" => 0,
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
        return "GnomoDaFloresta";
    }
    public function getAprimoramento()
    {
        return "Destreza (+1)";
    }
}
