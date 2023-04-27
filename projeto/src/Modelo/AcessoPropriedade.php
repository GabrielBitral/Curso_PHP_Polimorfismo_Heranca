<?php

namespace Alura\Banco\Modelo;

trait AcessoPropridade
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recuperar' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}