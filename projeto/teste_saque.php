<?php

require_once 'Autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 
        'Vinicius Dias', 
        new Endereco('Petrópolis', 'Bairro teste', 'Rua Lá', '37')));

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();