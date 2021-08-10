<?php

$idade = 18;
$nome = "Lucas1";

echo "Vc so pode entrar se tiver apartir de 18 anos" .PHP_EOL;

  if ($idade >= 18 && $nome == "Lucas")
  {
    echo "Vc tem $idade  anos ";
    echo "Pode Entrar";
  }

  else
  {
    echo "Vc tem $idade anos" .PHP_EOL;
    echo "Não pode entrar";
  }

echo PHP_EOL;
echo "Bye";

 ?>
