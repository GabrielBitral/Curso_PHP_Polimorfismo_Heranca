<?php

spl_autoload_register(function (string $nomeCompletoDaClasse){
    $caminhoDaClasse = str_replace('Alura\\Banco','projeto\src',$nomeCompletoDaClasse);
    $caminhoDaClasse = str_replace('\\',DIRECTORY_SEPARATOR,$caminhoDaClasse);
    $caminhoDaClasse .='.php';

    if(file_exists($caminhoDaClasse)){
        require_once $caminhoDaClasse;
    }
});