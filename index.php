<?php
require_once 'classe-pessoa.php';
require_once 'balada.php';

$ano = date('Y');
$zema = PHP_EOL . "Eu quero me drogar!" . PHP_EOL;

$trabalhador1 = new Pessoa(
    1965,
    'José',
    'Metalurgico',
    5100,
    'Humaita',
    'Ernesto',
    566 );

$trabalhador2 = new Pessoa(
    2008,
    'Leticia',
    'Cuidadora',
    1354.30,
    'Pinheiros',
    'Valadao',
    755
);

echo $trabalhador1;