<?php
require_once 'autoload.php';
use Banco\Modelo\Funcionario\Funcionario;
use Banco\Modelo\CPF;
use Banco\Service\ControladorDeBonificacoes;

$funcionario = new Funcionario('Fernando Muller', new CPF('518.909.598-39'), 'Desenvolvedor', 1000);
$funcionario->setSalario(5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($funcionario);
echo $controlador->getTotalBonificacoes();