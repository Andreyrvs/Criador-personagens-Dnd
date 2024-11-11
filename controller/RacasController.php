<?php


require_once "model/Racas/interface/InterfaceRaca.php";

class RacasController
{
    public function selecionarRaca()
    {
        // Verifique se a requisição é do tipo POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['raca'])) {
            $racaSelecionada = $_POST['raca'];

            // Construa o caminho do arquivo da raça
            $caminhoRaca = "model/Racas/{$racaSelecionada}.php";

            // Verifique se o arquivo existe antes de incluí-lo
            if (file_exists($caminhoRaca)) {
                require_once $caminhoRaca;

                // Instancie a classe da raça
                $classeRaca = new $racaSelecionada();
                $_SESSION['racas'] = serialize($classeRaca);

                // Redirecione ou carregue a view apropriada
                header("Location: Resumo.php"); // Exemplo de redirecionamento
                exit();
            } else {
                // Trate o erro se a raça não existir
                echo "Raça não encontrada.";
            }
        } else {
            // Se não for uma requisição POST, redirecione ou exiba uma mensagem
            echo "Selecione uma raça.";
        }
    }
}

// Crie uma instância do controlador e chame o método
$controller = new RacasController();
$controller->selecionarRaca();
