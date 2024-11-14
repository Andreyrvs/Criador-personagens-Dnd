<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class Humano implements Racas
{
    private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 1,
            "Destreza" => 1,
            "Constituição" => 1,
            "Inteligência" => 1,
            "Sabedoria" => 1,
            "Carisma" => 1,
        );
    }

    public function getAtributos()
    {
        return $this->atributos;
    }

    public function getNome()
    {
        return "Humano";
    }
    public function getAprimoramento()
    {
        return "Todos (+1,+1,+1,+1,+1,+1)";
    }
}
