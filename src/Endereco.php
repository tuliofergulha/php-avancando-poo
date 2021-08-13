<?php

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
}