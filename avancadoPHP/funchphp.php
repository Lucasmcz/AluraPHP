<?php

//Uma subrotina pode não precisar de Parametro
//subrotina != Função
//Subrotina não devolve valor nenhuma
//Function devolve valor
function  exibemensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}


function sacar(array $conta,float $ValoraSacar)
{
  if($ValoraSacar > $conta['saldo'])
  {
    exibemensagem('Vc n pode sacar');
    return $conta;
  }
  else
  {

    $conta['saldo'] -= $ValoraSacar;
    return $conta;

  }
}

function depositar(array $conta,float $valoradepo)
{
if($valoradepo > 0)
{
  $conta['saldo'] += $valoradepo;
  return $conta;
}
  exibemensagem('Depositos precisam ser positivos');
  return $conta;
}

$conta_corrente = [
  '123.745.230-43' => ['titular' => 'Mikey' , 'saldo' => 10000],
  '341.747.131-78' => ['titular' => 'Draken', 'saldo' => 1213],
  '032.131.021-23' => ['titular' => 'Emma' , 'saldo' => 200]

];


  $conta_corrente['032.131.021-23'] = depositar($conta_corrente['032.131.021-23'],200);
  $conta_corrente['123.745.230-43'] = sacar($conta_corrente['123.745.230-43'],100.34);





foreach ($conta_corrente as $cpf => $conta) {
  exibemensagem("$cpf : $conta[titular] : $conta[saldo] ");//Tirar as Aspas da variavel do array associativo
//String Simples e Complexa
}


 ?>
