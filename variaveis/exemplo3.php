<?php
// Turn off all error reporting
error_reporting(0);

//////////// Tipos Basicos ////////////////
$nome = "Anielson";
$site = "www.softmt.com.br";

$ano = 1990;
$salario = 5500.91;
$bloqueado = false;

//////////// Tipos Compostos ///////////////
$frutas = array("abacaxi","laranja","manga");
//echo $frutas[2];
//echo "<br/>";

$nascimento = new DateTime();
//var_dump($nascimento);

$arquivo = fopen("exemplo3.php", "r");
//var_dump($arquivo);

$nulo = NULL;

?>