<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() {
        self::$numeroDeContas--;
    }

    public function saca(float $valor): void
    {
        $tarifaSaque= $valor * $this->getTarifa();
        $valorSaque = $valor + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "Saldo indisponível.";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valor): void{
        if ($valor <= 0){
            echo "Valor inválido para realizar depósito.";
            return;
        }
       $this->saldo += $valor;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int{
        return self::$numeroDeContas;
    }

    public function getNomeTitular(): string{
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string{
        return $this->titular->getCpf();
    }

    abstract protected function getTarifa(): float;
}