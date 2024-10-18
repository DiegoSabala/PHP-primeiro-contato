<?php
require_once('classe-pessoa.php');

function permissaoParaEntrar(Pessoa $pessoa, $ano): string{
    $idade = $pessoa->idade($ano,$pessoa->nasc);
    $maiorDe18 = "$pessoa->nome tem $idade. Pode usar!" . PHP_EOL . PHP_EOL;
    $menorDe18 = "$pessoa->nome tem $idade. Apenas maiores de 18 anos podem!" . PHP_EOL . PHP_EOL;
    return $idade >= 18 ? $maiorDe18: $menorDe18;
};

// function consumir(Pessoa $pessoa, $produto): int{
//     if ($produto = 'agua'){
//         return $pessoa->saldo - 5;
//     } elseif ($produto =  'cerveja'){
//         return $pessoa->saldo - 15;
//     } elseif ($produto = 'café'){
//     return $pessoa->saldo - 8;
//     } else {
//         return $pessoa->saldo;
//     };
// };

function consumir(Pessoa $pessoa, $produto): int{
    switch ($produto) {
        case 'água':
            return $pessoa->saldo - 5;
        case 'cerveja':
            return $pessoa->saldo - 15;
        case'café':
            return $pessoa->saldo - 8;
        default:
            return $pessoa->saldo;
    };
};