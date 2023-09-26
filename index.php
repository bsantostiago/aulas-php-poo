<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança (Super Classe e Sub Classe)</li>
    </ul>

<?php
require_once "src/PessoaFisica.php";
$clientePF = new PessoaFisica;

$clientePF->setNome("Fulano");
$clientePF->setEmail("fulano@gmail.com");
$clientePF->setIdade(20);
$clientePF->setCpf("123.456.789-00");
?>

<pre> <?=var_dump($clientePF)?> </pre>


</body>
</html>