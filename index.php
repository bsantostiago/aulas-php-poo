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
        <li>Autoload de classes</li>
    </ul>

    <h3>EXEMPLO 1 (SEM MEXER NAS CLASSES EXISTENTES)</h3>

<?php
require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

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
use Tabajara\{PessoaFisica as PF, PessoaJuridica as PJ, MEI, Utilitarios};

require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/MEI.php";
require_once "src/Utilitarios.php";

$clientePF =  new PF;
$clientePJ = new PJ;
$clienteMEI = new MEI;

Utilitarios::obterData();
echo Utilitarios::$dataAtual;
?>

<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>
<pre><?=var_dump($clienteMEI)?></pre>

</body>
</html>