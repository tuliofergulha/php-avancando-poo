<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property string $bairro
 * @property string $numero
 */
final class Endereco
{
    use AcessoPropriedades;

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

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function __toString()
    {
        return "{$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}