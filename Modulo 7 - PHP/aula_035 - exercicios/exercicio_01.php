<?php

    /*
        Usando como ponto de partida o array de produtos,
        apresenta no HTML uma Unordered List (ul) contendo
        todos os produtos do array
    */

    $produtos = ['arroz', 'batata', ' laranja'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <!-- resposta do professor  -->
    <li><?= $produtos[0] ?></li>
    <li><?= $produtos[1] ?></li>
    <li><?= $produtos[2] ?></li>


    <ul>
        <?php foreach($produtos as $produto): ?>
            <li><?= trim($produto) ?></li>  <!-- O trim remove espaços indesejados-->
        <?php endforeach; ?>
    </ul>
</body>

</html>
