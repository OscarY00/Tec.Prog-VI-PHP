<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$bco  = 'pousada';

$conexao = mysqli_connect($host, $user, $pswd, $bco);

if (!$conexao) {
    die("Falha ao conectar com o banco de dados: " . mysqli_connect_error());
}


?>