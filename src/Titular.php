<?php

class Titular {

    private CPF $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome) {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNumeroCpf(): string {
        return $this->cpf->getNumero();
    }

    public function getNome(): string {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular): void{
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter ao menos 5 caracteres.";
            exit();
        }
    }
}