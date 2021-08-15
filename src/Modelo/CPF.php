<?php

namespace Alura\Banco\Modelo;

class CPF {

    private string $numero;

    public function __construct(string $numero)
    {
        $this->validaNumero($numero);
        $this->numero = $numero;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    private function validaNumero(string $numero): void{
        if (strlen($numero) < 14) {
            echo "O número do CPF informado é inválido.";
            exit();
        }
    }
}