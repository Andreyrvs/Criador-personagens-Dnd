<?php
require_once "model\Racas\interface\InterfaceRaca.php";

class AltoElfo implements Racas
{
    private $atributos;
    public function __construct()
    {
        $this->atributos = array(
            "Força" => 0,
            "Destreza" => 0,
            "Constituição" => 0,
            "Inteligência" => 1,
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
        return "AltoElfo";
    }
}
