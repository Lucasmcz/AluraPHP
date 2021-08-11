<?php
require_once 'funchphp.php';//require --> chamar outros arquivos

$conta_corrente = [
  '123.745.230-43' => ['titular' => 'Mikey' , 'saldo' => 10000],
  '341.747.131-78' => ['titular' => 'Draken', 'saldo' => 1213],
  '032.131.021-23' => ['titular' => 'Emma' , 'saldo' => 200]

];




  $conta_corrente['032.131.021-23'] = depositar($conta_corrente['032.131.021-23'],200);
  $conta_corrente['123.745.230-43'] = sacar($conta_corrente['123.745.230-43'],100.34);


titular_com_letras_maisculas($conta_corrente['123.745.230-43']);

echo "<ul>";
foreach ($conta_corrente as $cpf => $conta) {
  exibeconta($conta);
  //list('titular' => $titular , 'saldo' => $saldo) = $conta;//Prefiro usar List
  //exibemensagem("$cpf :  $titular R$$saldo,00");//Tirar as Aspas da variavel do array associativo
//String Simples e Complexa
}


echo "</ul>";
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
       <h1>Contas Correntes:</h1>
       <dl>
            <?php   foreach ($conta_corrente as $cpf => $conta){?>
           <dt>
             <h3> <?php echo $conta['titular']; ?>  - <?php   $cpf; ?></h3>
           </dt>
           <dt>
             Saldo: <?php echo $conta['saldo']; ?>
           </dt>
       </dl>
     <?php } ?>
   </body>
 </html>
