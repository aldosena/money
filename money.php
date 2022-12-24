<?php
# este arquivo formata um valor digitado em um form para ser inserido no banco
# https://github.com/aldosena/money
# aldosena10@gmail.com
# versao 1.4 - 2022-12-24

function grana_us($dinh){
  $din = "0".trim($dinh); // tira espaços
  $tam = strlen($din);// tamanho do texto
  if ($tam > 1){ // 5,
      if ($din[$tam - 1] == ","){$din[$tam - 1] = "#";}; // ultimo caractere
      if ($din[$tam - 1] == "."){$din[$tam - 1] = "#";};
  };
  if ($tam > 2){ // 5,1
      if ($din[$tam - 2] == ","){$din[$tam - 2] = "#";}; // penultimo
      if ($din[$tam - 2] == "."){$din[$tam - 2] = "#";};
  };
  if ($tam > 3){ // 5,10
      if ($din[$tam - 3] == ","){$din[$tam - 3] = "#";}; // antipenultimo
      if ($din[$tam - 3] == "."){$din[$tam - 3] = "#";};
  };
  // so numero e #
  $le = "";
  for ($i = 0; $i < $tam; $i++) { 
    if ($din[$i] == "0"){$le .= $din[$i]; };
	  if ($din[$i] == "1"){$le .= $din[$i]; };
	  if ($din[$i] == "2"){$le .= $din[$i]; };
	  if ($din[$i] == "3"){$le .= $din[$i]; };
	  if ($din[$i] == "4"){$le .= $din[$i]; };
	  if ($din[$i] == "5"){$le .= $din[$i]; };
	  if ($din[$i] == "6"){$le .= $din[$i]; };
	  if ($din[$i] == "7"){$le .= $din[$i]; };
	  if ($din[$i] == "8"){$le .= $din[$i]; };
	  if ($din[$i] == "9"){$le .= $din[$i]; };
	  if ($din[$i] == "#"){$le .= $din[$i]; };
  };
  $f1 = str_replace("#", ".", $le); // substitui a o caractere
  $f2 = floatval($f1); // converte para float 
  $f3 = number_format($f2, 2, '.', ''); // formata para ter ponto no lugar da virgula
  return $f3;
};// grana us

// como usar
// $g = $_POST["valor"];
// $v = grana_us($g);
?>
