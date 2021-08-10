<?php

$conta1 = ['titular' => 'Vinicius' , 'saldo' => 1000];
$conta2 = ['titular' => 'Maria' , 'saldo' => 10000];
$conta3 = ['titular' => 'Takemichi' , 'saldo' => 300];
//Arrays Associativos Muy IMPORTANTE
$contas_correntes = [$conta1,$conta2,$conta3];


for ($i=0; $i < count($contas_correntes) ; $i++) {
   echo $contas_correntes[$i]['titular'];
   echo "\n";
}


 ?>
