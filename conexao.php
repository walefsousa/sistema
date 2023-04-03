<?php

$hostname = "localhost";
$bancodedados = "meu_banco";
$usuario = "usuario";
$senha = "senha";

$mysqli = new mysqli($hostname, $usuario,$senha, $bancodedados);

if($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;

}//end if



?>