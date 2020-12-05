<?php

require_once("config.php");

$id_clientes = $_GET["id"];

$sql = "select * from reservas where id_clientes = $id_clientes";
$resultado = mysqli_query($conexao, $sql);

$registros = mysqli_num_rows($resultado);
if ($registros < 1) {
} else {

    while ($dados = mysqli_fetch_array($resultado)) {
        $str_array[] = $dados;
    }

    // Tranforma o array $dados em JSON
    echo json_encode($str_array, JSON_PRETTY_PRINT);
}

mysqli_close($conexao);
