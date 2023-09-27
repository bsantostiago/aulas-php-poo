<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: gerenciamento de dependências</li>
        <li><code>composer.json</code></li>
        <li>Autoload de classes</li>
    </ul>

    <h3>EXEMPLO 1 (SEM MEXER NAS CLASSES EXISTENTES)</h3>

<?php
/* Após criar composer.json e dar um composer dumpautoload.
Posso tirar inclusive os requires das subclasses */
require_once "vendor/autoload.php";

use Doador\Pagamento as DoadorPagamento;
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento; // as -> apelido
$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

?>
<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoFornecedor)?></pre>

<hr>

<h3>EXEMPLO 2 (NAMESPACE NAS CLASSES EXISTENTES)</h3>
<?php
use Tabajara\{Escola, PessoaFisica as PF, PessoaJuridica as PJ, MEI, Utilitarios};

$clientePF =  new PF;
$clientePJ = new PJ;
$clienteMEI = new MEI;

Utilitarios::obterData();
echo Utilitarios::$dataAtual;
?>

<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>
<pre><?=var_dump($clienteMEI)?></pre>

<hr>

<h3>Após fazer o básico do composer/autoload</h3>
<p><i>Nem precisei dar dump, pois a Escola está no mesmo namespace</i></p>
<?php
$escola = new Escola;
?>
<pre><?=var_dump($escola)?></pre>

<hr>
<h3>Doador (novo namespace)</h3>
<p><i>Neste caso preciso atualizar o json e fazer novo dump, pois temos um novo namespace</i></p>
<?php
$doadorPagamento = new DoadorPagamento;
?>
<pre><?=var_dump($doadorPagamento)?></pre>

</body>
</html>