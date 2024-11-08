<?php
class Racas
{
    protected $escolherRaca;

    public function setAprimoramentos($atributos) {}

    public function aplicarBonusRaca()
    {
        $this->escolherRaca->aplicarBonus($this);
    }
}
