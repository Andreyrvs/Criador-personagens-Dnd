<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class Humano implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 1;
        $destreza = 1;
        $constituicao = 1;
        $inteligencia = 1;
        $sabedoria = 1;
        $carisma = 1;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}
