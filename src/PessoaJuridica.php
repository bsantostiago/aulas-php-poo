<?php
namespace Tabajara;
require_once "Cliente.php";
class PessoaJuridica extends Cliente
{
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    public function __construct()
    {
        /* Acessando o método setter PROTEGIDO (existente em Cliente) */
        $this->setSituacao("em análise");
    }

    public function exibirDados(): void
    {
        echo "<p><i>Este é o método exibirDados() da classe PessoaJuridica</i></p>";
        echo "<h3>" . $this->getNome() . "</h3>";
        echo "<ul>";
        echo "<li>Ano de fundação: " . $this->anoFundacao . "</li>";
        echo "<li>Situação: " . $this->getSituacao() . "</li>";
        echo "</ul>";

        // se quiseremos forçar a execução também do método genérico da superclasse
        parent::exibirDados();
    }


    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }


    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }


    public function getCnpj(): string
    {
        return $this->cnpj;
    }


    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }


    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }


    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}
