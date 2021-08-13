<?php

require 'src/Conta.php';
require 'src/Endereco.php';
require 'src/Titular.php';
require 'src/CPF.php';

$endereco = new Endereco("Capivari", "um bairro", "121");
$tulio = new Titular(new CPF('123.456.789-10'), 'Tulio Fergulha', $endereco);
$c1 = new Conta($tulio);
$joao = new Titular(new CPF('183.456.234-20'), 'Joao Silva', $endereco);
$c2 = new Conta($joao);
$endereco2 = new Endereco("Alfenas", "Bairro", "2198");
$taina = new Titular(new CPF("385.4343.727-10"), "Tainá Gatinha", $endereco2);
$c3 = new Conta($taina);

echo $c1->getCpfTitular();
echo PHP_EOL;
echo $c2->getCpfTitular();
echo PHP_EOL;
echo Conta::getNumeroDeContas();
echo PHP_EOL;