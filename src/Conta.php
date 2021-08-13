<?php

class Conta{

    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() {
        self::$numeroDeContas--;
    }

    public function saca(float $valor): void{
        if ($valor > $this->saldo){
            echo "Saldo indisponível.";
            return;
        }
        $this->saldo -= $valor;
    }

    public function deposita(float $valor): void{
        if ($valor <= 0){
            echo "Valor inválido para realizar depósito.";
            return;
        }
       $this->saldo += $valor;
    }

    public function transferi(float $valor, Conta $contaDestino): void {
        if ($valor > $this->saldo){
            echo "Saldo indisponível.";
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);
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
        return $this->titular->getNumeroCpf();
    }
}