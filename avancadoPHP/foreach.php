<?php


$conta3 = ['nome' => 'Takemichi' , 'saldo' => 50];

$conta_correntes = [
  1234 => ['nome' => 'Mikey' , 'saldo' => 453423232],
  0451 => ['nome' => 'Draken' , 'saldo' => 232],
  2932 => ['nome' => 'Takemichi' , 'saldo' => 50]
];


$conta_correntes[12132133333] = ['nome' => 'Hinata' , 'saldo' => 231231];
$conta_correntes[] = ['nome' => 'bagi' , 'saldo' => 12];

foreach ($conta_correntes as $cpf => $conta) {
  echo $conta['nome'] .PHP_EOL;
}

 ?>
