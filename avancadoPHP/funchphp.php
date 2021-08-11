<?php


function  exibemensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}

$conta_corrente = [
  '123.745.230-43' => ['titular' => 'Mikey' , 'saldo' => 10000],
  '341.747.131-78' => ['titular' => 'Draken', 'saldo' => 1213],
  '032.131.021-23' => ['titular' => 'Emma' , 'saldo' => 200]

];

$conta_corrente['341.747.131-78']['saldo'] -= 300;
if(500 > $conta_corrente['032.131.021-23']['saldo'])
{
   exibemensagem('Vc n pode sacar');
}
else
{
  exibemensagem('Vc pode sacar');
}


foreach ($conta_corrente as $cpf => $conta) {
  exibemensagem($cpf . ':' . $conta['titular'] . ' Saldo:' . $conta['saldo']);

}


 ?>
