<?php

class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): Cpf
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