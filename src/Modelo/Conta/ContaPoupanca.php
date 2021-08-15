<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function getTarifa(): float
    {
        return 0.03;
    }
}