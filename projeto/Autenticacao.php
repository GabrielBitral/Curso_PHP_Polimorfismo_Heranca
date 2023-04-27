<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;

require_once 'Autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('João da Silva',
    new CPF('123.456.789-10'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');