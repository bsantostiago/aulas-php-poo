<?php
namespace Tabajara;
require_once "PessoaJuridica.php";
final class MEI extends PessoaJuridica {
    private string $areaDeAtuacao;

    public function getAreaDeAtuacao():string {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao):self {
        $this->areaDeAtuacao = $areaDeAtuacao;
        return $this;
    }
}