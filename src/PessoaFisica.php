<?php
namespace Tabajara;
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private int $idade;
    private string $cpf;

    public function __construct(){
        $this->setSituacao("normal");
    }
    
    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}