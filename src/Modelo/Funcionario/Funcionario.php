<?php
namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Pessoa;
use Banco\Modelo\CPF;

class Funcionario extends Pessoa
{
    private string $cargo;
    private string $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
