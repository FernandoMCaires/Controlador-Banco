<?php 
namespace Banco\Service;
use Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
   private $totalBonificacoes = 0;
   public function adicionarBonificacaoDe(Funcionario $funcionario){
    return $this->totalBonificacoes += $funcionario->calculaBonificacao();
   }

   public function getTotalBonificacoes(): float{
    return $this->totalBonificacoes;
   }
}