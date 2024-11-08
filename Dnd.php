<?php

interface Raca
{
    public function aplicarBonus(Personagem $personagem);
}

class AnaoDaMontanha implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 2;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

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

class Draconato implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 2;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 1;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class MeioOrc implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 2;
        $destreza = 0;
        $constituicao = 1;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class Elfo implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 2;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class Halfling implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 2;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}
class GnomoDaFloresta implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 1;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class Anao implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 2;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}
class GnomoDasRochas implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 1;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class HalflingRobusto implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 1;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class AltoElfo implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 1;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class Gnomo implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 2;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

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

class AnaoDaColina implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 1;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class ElfoDaFloresta implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 1;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

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

class Drow implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 1;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}

class HalflingPesLeves implements Raca
{
    public function aplicarBonus(Personagem $personagem)
    {

        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 1;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
    }
}


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

        $custoPontosHabilidades = [
            8 => 0,
            9 => 1,
            10 => 2,
            11 => 3,
            12 => 4,
            13 => 5,
            14 => 7,
            15 => 9
        ];

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

        $habilidades = [
            'forca' => $forca,
            'destreza' => $destreza,
            'constituicao' => $constituicao,
            'inteligencia' => $inteligencia,
            'sabedoria' => $sabedoria,
            'carisma' => $carisma,
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

class Barbaro extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Barbaro\n";
    }
}

class Guerreiro extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Guerreiro\n";
    }
}

class Paladino extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Paladino\n";
    }
}

class Ladino extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Ladino\n";
    }
}

class Monge extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Monge\n";
    }
}

class Patrulheiro extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Patrulheiro\n";
    }
}

class Mago extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Mago\n";
    }
}

class Clerigo extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Clérigo\n";
    }
}

class Druida extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Druida\n";
    }
}

class Bardo extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Bardo\n";
    }
}

class Bruxo extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Bruxo\n";
    }
}

class Feiticeiro extends Personagem
{
    public function __construct(Raca $raca)
    {
        parent::__construct($raca);
        $this->exibir();
    }

    public function exibir()
    {
        echo "Você é um Feiticeiro\n";
    }
}




class Jogo
{
    protected $classes;
    protected $racas;
    protected $lerClasse;
    protected $lerRaca;

    public function __construct()
    {
        $this->racas =  [
            1 => new AnaoDaMontanha,
            2 => new Humano,
            3 => new Draconato,
            4 => new MeioOrc,
            5 => new Elfo,
            6 => new Halfling,
            7 => new  GnomoDaFloresta,
            8 => new Anao,
            9 => new  GnomoDasRochas,
            10 => new HalflingRobusto,
            11 => new AltoElfo,
            12 => new Gnomo,
            13 => new Tiefling,
            14 => new AnaoDaColina,
            15 => new ElfoDaFloresta,
            16 => new MeioElfo,
            17 => new Drow,
            18 => new HalflingPesLeves
        ];
        $this->classes = [
            1 => "Barbaro",
            2 => "Guerreiro",
            3 => "Paladino",
            4 => "Ladino",
            5 => "Monge",
            6 => "Patrulheiro",
            7 => "Mago",
            8 => "Clerigo",
            9 => "Druida",
            10 => "Bardo",
            11 => "Bruxo",
            12 => "Feiticeiro"
        ];
        $this->entradasUsuario();
    }

    public function entradasUsuario()
    {
        echo "Selecione uma Classe (1 à 12):\n";
        $this->listarClasses();
        $this->lerClasse = intval(readline());
        echo "Aprimoremento Racial:\n";
        $this->listarRacas();
        echo "Escolha a sua raça (1 à 18): \n";
        $this->lerRaca = intval(readline());
        echo "Distribua os atributos:\n";
        echo "Força: ";
        $forca =  intval(readline());
        echo "Destreza: ";
        $destreza =  intval(readline());
        echo "Constituição: ";
        $constituicao =  intval(readline());
        echo "Inteligencia: ";
        $inteligencia =  intval(readline());
        echo "Sabedoria: ";
        $Sabedoria =  intval(readline());
        echo "Carisma: ";
        $carisma =  intval(readline());
        $this->criarPersonagem($this->lerClasse, $this->lerRaca,  $forca, $destreza, $constituicao, $inteligencia, $Sabedoria, $carisma);
    }

    public function listarRacas()
    {
        $arrayRacas = [
            "1. AnaoDaMontanha" => "Força (+2)",
            "2. Humano" => "Todas habilidades (+1)",
            "3.Draconato" => "Força(+2), Carisma(+1)",
            "4. MeioOrc" => "Força(+2), Constituição(+1)",
            "5. Elfo" => "Destreza (+2)",
            "6. Halfling" => "Destreza (+2)",
            "7. GnomoDaFloresta" => "Destreza (+1)",
            "8. Anao" => "Constituição (+2)",
            "9. GnomoDasRochas" => "Constituição (+1)",
            "10. HalflingRobusto" => "Constituição (+1)",
            "11. AltoElfo" => "Inteligência (+1)",
            "12. Gnomo" => "Inteligência (+2)",
            "13. Tiefling" => "Inteligência (+1), Carisma(+2)",
            "14. AnaoDaColina" => "Sabedoria (+1)",
            "15. ElfoDaFloresta" => "Sabedoria (+1)",
            "16. MeioElfo" => "Carisma (+2)",
            "17. Drow" => "Carisma (+1)",
            "18. HalflingPesLeves" => "Carisma (+1)"
        ];
        foreach ($arrayRacas as $raca => $aprimoramentos) {
            echo "\t{$raca} - {$aprimoramentos}\n";
        }
    }

    public function listarClasses()
    {
        foreach ($this->classes as $chaveH => $classe) {
            echo "\t{$chaveH}. {$classe}\n";
        }
    }

    public function criarPersonagem($lerClasse, $lerRaca, $forca, $destreza, $constituicao, $inteligencia, $Sabedoria, $carisma)
    {

        $classeSelecionada = null;
        foreach ($this->classes as $chaveH => $nomeClasse) {
            if ($lerClasse == $chaveH) {
                $classeSelecionada = $nomeClasse;
            }
        }

        $racaSelecionada = null;
        foreach ($this->racas as $chaveRaca => $raca) {
            if ($lerRaca === $chaveRaca) {
                $racaSelecionada = $raca;
            }
        }

        if ($classeSelecionada && $racaSelecionada) {
            $personagem = new Personagem($racaSelecionada);
            $personagem->distribuirAtributos($forca, $destreza, $constituicao, $inteligencia, $Sabedoria, $carisma);
            $personagem->imprimePontos();
        } else {
            echo "Classe ou raça inválida.";
        }
    }
}

$novoJogo = new Jogo();
