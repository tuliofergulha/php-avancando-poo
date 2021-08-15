<?php

require_once 'autoload.php';

use Alura\{Banco\Modelo\CPF, Banco\Modelo\Funcionario};
use Alura\Banco\Service\ControladorBonificacoes;

$umFuncionario = new Funcionario(
    "Túlio Fergulha",
    new CPF("123.456.789-10"),
    "Desenvolvedor",
    3000
);

$umaFuncionario = new Funcionario(
    "Patrícia Fergulha",
    new CPF("987.654.321-01"),
    "Gerente",
    6000
);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionario);
echo $controlador->getTotal();