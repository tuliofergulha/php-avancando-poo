<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF("123.456.789-10"),
        "Túlio Fergulha",
        new Endereco("Capivari", "Vila Souza", "Avenida Piratiinga", "134")
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->getSaldo();