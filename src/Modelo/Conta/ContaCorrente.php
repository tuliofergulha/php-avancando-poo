<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function getTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valor, Conta $contaDestino): void {
        if ($valor > $this->saldo){
            echo "Saldo indisponível.";
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }

}