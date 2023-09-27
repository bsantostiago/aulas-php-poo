<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 8</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 8</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Definição e uso de namespaces e alias</li>
    </ul>

<?php

// Só de importar, já dá erro (antes de por namespace)
require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

// Agora pra usar e instaciar, chamamos o namespace
// Forma 1 (Namespace\NomeDaClasse):
// $pagamentoFornecedor = new Fornecedor\Pagamento;
// $pagamentoPrestador = new Prestador\Pagamento;

// Forma 2 (use dos namespaces e alias)
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento; // as -> apelido
$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

?>
<hr>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoFornecedor)?></pre>

<hr>

<?php // o resto é normal, continuaria funcionando sem namespace (mas é bom usar ns em tudo)
require_once "src/Cliente.php";
$cliente = new Cliente;
?>
<pre><?=var_dump($cliente)?></pre>
</body>
</html>