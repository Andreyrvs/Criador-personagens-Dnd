<?php
// Array com os nomes das classes
$classes = [
    "AnaoDaMontanha",
    "Humano",
    "Draconato",
    "MeioOrc",
    "Elfo",
    "Halfling",
    "GnomoDaFloresta",
    "Anao",
    "GnomoDasRochas",
    "HalflingRobusto",
    "AltoElfo",
    "Gnomo",
    "Tiefling",
    "AnaoDaColina",
    "ElfoDaFloresta",
    "MeioElfo",
    "Drow",
    "HalflingPesLeves"
];

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
        return "Nome";
    }
}
?>
';

foreach ($classes as $class_name) {
    $file_path = $base_path . $class_name . '.php';
    $file_content = str_replace('CLASS_NAME', $class_name, $interface_requirement);

    // Criar e escrever no arquivo
    file_put_contents($file_path, $file_content);
}

echo "Arquivos criados com sucesso!";
