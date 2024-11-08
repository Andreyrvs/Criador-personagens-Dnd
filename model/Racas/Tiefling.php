<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class Tiefling implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 1;
        $sabedoria = 0;
        $carisma = 2;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}
