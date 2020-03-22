<?php
// Turn off all error reporting
error_reporting(0);

$anoNascimento = 1990;
$nome = "Anielson";
$sobreNome = "Rodrigues Ferreira";
$nomeCompleto = $nome . " " . $sobreNome; 
echo $nomeCompleto;
echo "<br/>";

exit;

unset($nome);

if (isset($nome)) {
	echo $nome;	
}



?>