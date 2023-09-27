<?php
namespace Tabajara;
class Utilitarios {
    /* Erro, pois Propriedades estáticas só podem ser inicializadas com valores constantes ou literais, não com expressões de função ou variáveis. */
    //public static int $dataAtual = date("d/M/Y");

    public static string $dataAtual;
    
    public static function obterData() {
        // self:: para acessar recurso estático de dentro da própria classe
        self::$dataAtual = date("d/m/Y");
    }

    public static function definirAtendimento(int $idade):string {
        return $idade >= 60 ? "prioritário" : "normal";
    }
}