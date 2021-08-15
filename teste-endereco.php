<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco("Capivari", "Bairro", "123");
$outroEndereco = new Endereco("Piracicaba", "São Dimas", "1112");

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
echo PHP_EOL;

$umEndereco->cidade = "Nova City";
echo $umEndereco->cidade;