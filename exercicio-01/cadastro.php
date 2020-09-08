<?php

require_once('conexao.php');

$nome = '';
$doc = '';
$dataNasc = '';
$cidade = '';
$estado = '';
$id = '';

if(isset($_GET['id']) && $_GET['id'] != ""){
  $sql = "select * from pousada where id = ".$_GET['id'];
  $resultado = mysqli_query($conexao, $sql);
  if($resultado){
     $dados = mysqli_fetch_array($resultado);
     $nome = $dados['nome'];
     $doc = $dados['doc'];
     $dataNasc = $dados['dataNasc'];
     $cidade = $dados['cidade'];
     $estado = $dados['estado'];
     $id = $dados['id'];
 }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário Cliente</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background-color = "gray">
    <div width=60% align=center>
        <form class="formulario" method="post" action="clientes.php" align=left> 
            <p> Entre com os dados do Cliente</p>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="field">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" placeholder="Digite o nome completo*" required>
            </div>

             <div class="field">
                <label for="doc">CPF ou RG:</label>
                <input type="text" id="doc" name="doc" value="<?php echo $doc; ?>" placeholder="Digite o documento*" required>
            </div>

            <div class="field">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="Data" id="dataNasc" name="dataNasc" value="<?php echo $dataNasc; ?>" placeholder="Digite o dataNasc*" required>
            </div>        

            <div class="field">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>" placeholder="Digite a cidade*" required>
            </div>

            <div class="field">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?php echo $estado; ?>" placeholder="Digite o estado*" required>
            </div>

            <input type="submit" name="clientes" value="Enviar">
        </form>
    </div>
</body>
</html>