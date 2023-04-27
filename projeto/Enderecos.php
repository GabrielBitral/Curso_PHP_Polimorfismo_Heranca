<?php

use Alura\Banco\Modelo\Endereco;

require_once 'Autoload.php';

$umEndereco = new Endereco('Petropolis', 'Bairro qualquer', 'Minha Rua', '19');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma rua ai', '50');

echo $umEndereco;