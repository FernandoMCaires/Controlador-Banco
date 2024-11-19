<?php

require_once 'autoload.php';

use Banco\Modelo\Conta\Titular;
use Banco\Modelo\Endereco;
use Banco\Modelo\CPF;
Use Banco\Modelo\Conta\Conta;
use Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('Sao Paulo', 'um bairro qualquer', 'rua', 'b30');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius, 1);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); 

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia, 1);
var_dump($segundaConta);


