<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $erros = [];

    // Capturando os valores do formulário
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $nascimento = trim($_POST["nascimento"] ?? "");
    $cpf = trim($_POST["cpf"] ?? "");
    $senha = $_POST["senha"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $endereco = trim($_POST["endereco"] ?? "");
    $cep = trim($_POST["cep"] ?? "");
    $cidade = trim($_POST["cidade"] ?? "");
    $estado = $_POST["estado"] ?? "";
    $termos = $_POST["termos"] ?? null;
    $arquivo = $_FILES["arquivo"] ?? null;

    // Validações
    if (empty($nome)) 
    $erros[] = "O campo Nome é obrigatório.";
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    $erros[] = "E-mail inválido.";
    
    if (empty($telefone)) 
    $erros[] = "O campo Telefone é obrigatório.";
    
    if (empty($nascimento)) 
    $erros[] = "O campo Data de Nascimento é obrigatório.";

    // Validação de CPF (formato simples)
    if (!preg_match("/^[0-9]{11}$/", $cpf)) 
    $erros[] = "CPF inválido. Digite apenas números.";

    // Validação de senha
    if (strlen($senha) < 6) 
    $erros[] = "A senha deve ter no mínimo 6 caracteres.";

    // Validação de endereço
    if (empty($endereco)) 
    $erros[] = "O campo Endereço é obrigatório.";
    
    if (empty($cep)) 
    $erros[] = "O campo CEP é obrigatório.";

    if (empty($cidade)) 
    $erros[] = "O campo Cidade é obrigatório.";
    
    if (empty($estado)) 
    $erros[] = "O campo Estado é obrigatório.";

    // Validação do checkbox de termos
    if (!$termos) 
    $erros[] = "Você deve aceitar os termos e condições.";

    // Validação do upload de arquivo
    if ($arquivo && $arquivo["error"] == 0) {
        $extensoes_permitidas = ["jpg", "jpeg", "png", "pdf"];
        $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));

        if (!in_array($extensao, $extensoes_permitidas)) {
            $erros[] = "O arquivo deve ser uma imagem (JPG, JPEG, PNG) ou PDF.";
        }

        if ($arquivo["size"] > 2 * 1024 * 1024) {
            $erros[] = "O arquivo deve ter no máximo 2MB.";
        }
    } else {
        $erros[] = "O upload de arquivo é obrigatório.";
    }

    // Exibir mensagens
    if (!empty($erros)) {
        echo "<h3>Erros encontrados:</h3><ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo "</ul><a href='index.html'>Voltar</a>";
    } else {
        echo "<h3>Formulário enviado com sucesso!</h3>";
    }
} else {
    echo "<h3>Erro ao processar o formulário.</h3>";
}
?>
