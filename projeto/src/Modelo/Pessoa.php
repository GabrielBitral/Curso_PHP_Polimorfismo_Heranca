<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropridade;
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    final protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
