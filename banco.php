<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/CPF.php';

$tulio = new Titular(new CPF('123.456.789-10'), 'Tulio Fergulha');
$c1 = new Conta($tulio);
$joao = new Titular(new CPF('183.456.234-20'), 'Joao Silva');
$c2 = new Conta($joao);

echo $c1->getCpfTitular();
echo PHP_EOL;
echo $c2->getCpfTitular();
echo PHP_EOL;
echo Conta::getNumeroDeContas();