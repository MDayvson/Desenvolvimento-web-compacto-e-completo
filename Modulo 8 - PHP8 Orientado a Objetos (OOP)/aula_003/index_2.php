<?php

// COMO ESCREVER UMA CLASSE E INSTANCIAR UM OBJETO

/* 
Vamos fazer uma pequena implementação
*/

class Fruto
{
    // propriedades
    public $nome;
}

$laranja = new Fruto();

// definir o valor da propriedade
$laranja->nome = "Laranja";

// criar um outro objeto do tipo Fruto
$abacaxi = new Fruto();
$abacaxi->nome = 'Abacaxi';


// como vamos apresentar as propriedades de um objeto?
echo $laranja->nome;
echo '<br>';
echo $abacaxi->nome;

// cada objeto criado a partir da mesma classe, contém as suas propriedades
// de forma completamente independente.