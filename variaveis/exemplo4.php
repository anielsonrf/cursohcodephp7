<?php
// Turn off all error reporting
error_reporting(0);

$v = (int)$_GET["v"];
//var_dump($v);

$nomeArquivo = $_SERVER["SCRIPT_NAME"];
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip . " - " . $nomeArquivo;
?>