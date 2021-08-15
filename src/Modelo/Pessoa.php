<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    protected function validaNomeTitular(string $nomeTitular): void{
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter ao menos 5 caracteres.";
            exit();
        }
    }
}