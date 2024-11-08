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
    public function aplicarBonus(Personagem $personagem) {
        $forca = 0;
        $destreza = 0;
        $constituicao = 0;
        $inteligencia = 0;
        $sabedoria = 0;
        $carisma = 0;
        $personagem->aprimoramentoRacial($forca, $destreza, $constituicao, $inteligencia, $sabedoria, $carisma);
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
