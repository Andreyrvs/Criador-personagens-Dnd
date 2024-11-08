<?php
class Personagem
{
    protected $forca;
    protected $destreza;
    protected $constituicao;
    protected $inteligencia;
    protected $sabedoria;
    protected $carisma;
    protected $pontosIniciais;
    protected $escolherRaca;
    protected $pontosDeVida;
    protected $modificadores;

    public function __construct(Raca $raca)
    {
        $this->habilidadesPadrao();
        $this->escolherRaca = $raca;
    }

    public function habilidadesPadrao()
    {
        $this->forca = 8;
        $this->destreza = 8;
        $this->constituicao = 8;
        $this->sabedoria = 8;
        $this->carisma = 8;
        $this->inteligencia = 8;
        $this->pontosIniciais = 27;
    }

    public function distribuirAtributos($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma)
    {



        $modificadoresDeHabilidades = [
            8 => -1,
            9 => -1,
            10 => 0,
            11 => 0,
            12 => 1,
            13 => 1,
            14 => 2,
            15 => 2,
            16 => 3,
            17 => 3,
            18 => 4,
            19 => 4
        ];


        foreach ($habilidades as $chaveH => $valorH) {

            $valorDentroDoIntervalo = $valorH >= 8 && $valorH <= 15;
            if (!$valorDentroDoIntervalo) {
                echo "Atributo está fora do intervalo de 8 à 15\n";
                return;
            } else {
                $this->forca = $forca;
                $this->destreza = $destreza;
                $this->constituicao = $constituicao;
                $this->inteligencia = $inteligencia;
                $this->sabedoria = $sabedoria;
                $this->carisma = $carisma;
                $this->aplicarBonusRaca();
            }

            $custo = $custoPontosHabilidades[$valorH];
            if ($this->pontosIniciais >= $custo) {
                $this->pontosIniciais -= $custo;
            } else {
                echo "Valor de '{$chaveH}' {$valorH} tem custo: {$custoPontosHabilidades[$valorH]}. Veja se ainda tem pontos para distribuir\n";
                echo "Pontos restantes: {$this->pontosIniciais}\n";
                return;
            }
            // Tinha entendido que era para somar o modificador
            # $this->calcularModificadores();
        }

        $this->pontosDeVida = $modificadoresDeHabilidades[$this->constituicao] + 10;
    }

    public function calcularModificadores()
    {
        $modificadoresDeHabilidades = [
            8 => -1,
            9 => -1,
            10 => 0,
            11 => 0,
            12 => 1,
            13 => 1,
            14 => 2,
            15 => 2,
            16 => 3,
            17 => 3,
        ];

        $this->forca += $modificadoresDeHabilidades[$this->forca];
        $this->destreza += $modificadoresDeHabilidades[$this->destreza];
        $this->constituicao += $modificadoresDeHabilidades[$this->constituicao];
        $this->inteligencia += $modificadoresDeHabilidades[$this->inteligencia];
        $this->sabedoria += $modificadoresDeHabilidades[$this->sabedoria];
        $this->carisma += $modificadoresDeHabilidades[$this->carisma];
    }


    public function imprimePontos()
    {
        echo "\nForça: {$this->forca}\n";
        echo "Destreza: {$this->destreza}\n";
        echo "Constituição: {$this->constituicao}\n";
        echo "Inteligencia: {$this->inteligencia}\n";
        echo "Sabedoria: {$this->sabedoria}\n";
        echo "Carisma: {$this->carisma}\n";
        echo "Prontos restantes: {$this->pontosIniciais}\n";
        echo "Pontos de vida: {$this->pontosDeVida}\n";
    }


    public function aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma)
    {
        $this->forca += $forca;
        $this->destreza += $destreza;
        $this->constituicao += $constituicao;
        $this->inteligencia += $inteligencia;
        $this->sabedoria += $sabedoria;
        $this->carisma += $carisma;
    }

    public function aplicarBonusRaca()
    {
        $this->escolherRaca->aplicarBonus($this);
    }
}
