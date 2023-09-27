<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 7</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Propriedades e métodos estáticos</li>
        <li>Acesso direto sem necessidade de objeto/instância</li>
    </ul>

<?php
require_once "src/PessoaFisica.php";
require_once "src/Utilitarios.php";

$cliente1 = new PessoaFisica;
$cliente2 = new PessoaFisica;

$cliente1->setNome("Astrogildo");
$cliente1->setIdade(70);

$cliente2->setNome("Enzo");
$cliente2->setIdade(20);

// Carregar dados da data atual
Utilitarios::obterData();
?>
<hr>

<h3>Hoje é <?=Utilitarios::$dataAtual?></h3>

<p>O cliente <?=$cliente1->getNome()?> 
terá atendimento <b><?=Utilitarios::definirAtendimento($cliente1->getIdade())?></b></p>

<p>O cliente <?=$cliente2->getNome()?> 
terá atendimento <b><?=Utilitarios::definirAtendimento($cliente2->getIdade())?></b></p>

<?php

?>

</body>
</html>