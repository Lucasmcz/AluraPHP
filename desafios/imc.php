<?php
$peso = 50.3;
$altura = 1.64;
$imc = $peso/($altura*$altura);
echo "$imc";

if($imc < 18.5)
{
  echo " Voce está abaixo do recomendado";
}

elseif($imc < 25)
{
  echo " Dentro do recomendavel";
}

elseif($imc > 25)
{
  echo " Acima do peso";
}


 ?>
