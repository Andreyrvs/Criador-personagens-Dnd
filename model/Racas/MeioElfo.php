<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class MeioElfo implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 2;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}
