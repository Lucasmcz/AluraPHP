<?php

$carros = ['LMS-2312' => ['Marca' => 'VW' , 'Modelo' => 'Golf'], 'DEA-1873' => ['Marca' => 'Ford' , 'Modelo' => 'Ka']];


foreach ($carros as $placa => $carro) {
             echo $placa . ':' . $carro['Modelo'];
             echo "\n";
}
 ?>
