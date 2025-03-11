<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $erros = [];

    // Validação do Nome (mínimo 3 caracteres)
    if (empty($_POST["nome"]) || strlen(trim($_POST["nome"])) < 3) {
        $erros[] = "O nome deve ter pelo menos 3 caracteres.";
    }

    // Validação do E-mail (formato válido)
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Informe um e-mail válido.";
    }

    // Validação da Senha (mínimo 6 caracteres)
    if (empty($_POST["senha"]) || strlen($_POST["senha"]) < 6) {
        $erros[] = "A senha deve ter pelo menos 6 caracteres.";
    }

    // Validação do Telefone (10 ou 11 dígitos)
    if (empty($_POST["telefone"]) || !preg_match("/^\d{10,11}$/", $_POST["telefone"])) {
        $erros[] = "O telefone deve ter 10 ou 11 dígitos.";
    }

    // Validação da Data de Nascimento (não pode ser futura)
    if (!empty($_POST["dataNascimento"])) {
        $dataNascimento = strtotime($_POST["dataNascimento"]);
        $hoje = strtotime(date("Y-m-d"));
        if ($dataNascimento > $hoje) {
            $erros[] = "A data de nascimento não pode ser futura.";
        }
    } else {
        $erros[] = "Informe sua data de nascimento.";
    }

    // Validação do Gênero (não pode ser vazio)
    if (empty($_POST["genero"])) {
        $erros[] = "Selecione um gênero.";
    }

    // Validação do Endereço
    if (empty($_POST["endereco"])) {
        $erros[] = "Informe seu endereço.";
    }

    // Validação do Arquivo (opcional, mas deve ser um tipo permitido)
    if (!empty($_FILES["arquivo"]["name"])) {
        $permitidos = ["pdf", "doc", "docx", "png", "jpg", "jpeg"];
        $extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);

        if (!in_array(strtolower($extensao), $permitidos)) {
            $erros[] = "Tipo de arquivo não permitido. Apenas PDF, DOC, DOCX, PNG, JPG, JPEG.";
        }
    }

    // Se houver erros, exibe na tela
    if (!empty($erros)) {
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-danger'><ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo "</ul></div>";
        echo "<a href='index.html' class='btn btn-primary'>Voltar</a>";
        echo "</div>";
    } else {
        // Se não houver erros, exibe mensagem de sucesso
        echo "<div class='container mt-3'>";
        echo "<div class='alert alert-success'>Cadastro realizado com sucesso!</div>";
        echo "<a href='index.html' class='btn btn-primary'>Voltar</a>";
        echo "</div>";
    }
}
?>
