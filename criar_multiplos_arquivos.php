<?php
// Array com os nomes das classes e seus aprimoramentos
$racas_aprimoramentos = array(
    "AltoElfo" => "Inteligência (+1)",
    "Anao" => "Constituição (+2)",
    "AnaoDaColina" => "Sabedoria (+1)",
    "AnaoDaMontanha" => "Força (+2)",
    "Draconato" => "Força (+2) Carisma (+1)",
    "Drow" => "Carisma (+1)",
    "Elfo" => "Destreza (+2)",
    "ElfoDaFloresta" => "Sabedoria (+1)",
    "Gnomo" => "Inteligência (+2)",
    "GnomoDaFloresta" => "Destreza (+1)",
    "GnomoDasRochas" => "Constituição (+1)",
    "Halfling" => "Destreza (+2)",
    "HalflingPesLeves" => "Carisma (+1)",
    "HalflingRobusto" => "Constituição (+1)",
    "Humano" => "Todos (+1,+1,+1,+1,+1,+1)",
    "MeioElfo" => "Carisma (+2)",
    "MeioOrc" => "Força(+2) Constituição (+1)",
    "Tiefling" => "Inteligência(+1) Carisma (+2)"
);

// Caminho base para os arquivos
$base_path = './model/Racas/';

// Conteúdo base do arquivo PHP
$interface_requirement = '<?php
require_once "./model/Racas/interface/InterfaceRaca.php";

class CLASS_NAME implements Raca {
   private $atributos;

    public function __construct()
    {
        $this->atributos = array(
            "Força" => 0,
            "Destreza" => 0,
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
        return "CLASS_NAME";
    }
    public function getAprimoramento()
    {
        return "CLASS_APRIMORAMENTOS";
    }
}
?>
';

foreach ($racas_aprimoramentos as $class_name => $aprimoramentos) {
    $file_path = $base_path . $class_name . '.php';
    $file_content = str_replace(
        ['CLASS_NAME', 'CLASS_APRIMORAMENTOS'],
        [$class_name, $aprimoramentos],
        $interface_requirement
    );

    // Criar e escrever no arquivo
    file_put_contents($file_path, $file_content);
}

echo "Arquivos criados com sucesso!";
