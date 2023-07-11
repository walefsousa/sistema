<?php

$hostname = "192.168.11.17";
$bancodedados = "banco_loja";
$usuario = "walef";
$senha = "Walef1990@";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;

}//end if



?>