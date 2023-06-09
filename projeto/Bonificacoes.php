<?php

require_once 'Autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('Vinicius Dias', 
    new CPF('123.456.789-10'), 1000);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente('Patricia', 
    new CPF('987.654.321-10'), 3000);

$umDiretor = new Diretor('Ana Paula', 
new CPF('123.964.909-10'), 5000);

$umEditor = new EditorVideo('Paulo', 
new CPF('123.555.909-10'), 1500);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();