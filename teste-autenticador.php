<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    "João da Silva",
    new CPF("123.456.789-10"),
    10000
);

$gerente = new Gerente(
    "João da Silva",
    new CPF("123.456.789-10"),
    10000
);

$titular = new Titular(
    new CPF("321.354.565-02"),
    "Teste Titular",
    new Endereco("Capivari", "Bairro", "12")
);

$autenticador->tentaLogin($diretor, "1234");
echo PHP_EOL;
$autenticador->tentaLogin($gerente, "4321");
echo PHP_EOL;
$autenticador->tentaLogin($titular, "abcd");