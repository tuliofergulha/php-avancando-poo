<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, EditorVideo, Gerente, Diretor, Funcionario};
use Alura\Banco\Service\ControladorBonificacoes;

$umDesenvolvedor = new Desenvolvedor(
    "Túlio Fergulha",
    new CPF("123.456.789-10"),
    3000
);

$umDesenvolvedor->sobeDeNivel();

$umaGerente = new Gerente(
    "Patrícia Fergulha",
    new CPF("987.654.321-01"),
    6000
);

$umDiretor = new Diretor(
    "Tiago Pagotto",
    new CPF("123.654.987-10"),
    10000
);

$umEditor = new EditorVideo(
    "Cristiano Sampaio",
    new CPF("434.567.983-22"),
    3500
);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);
echo $controlador->getTotal();