
<?php

	require_once('conexao.php');

	if(isset($_POST['nome']) && $_POST['nome'] != ""){

		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$doc = $_POST['doc'];
		$dataNasc = $_POST['dataNasc'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];


		if($id == ""){
			$sql = "insert into quartos (nome, doc, dataNasc, cidade, estado)
				values ('$nome', '$doc', '', '$cidade', '$estado')
			";
		}else{
			$sql = "update quartos set nome = '$nome', doc = '$doc', dataNasc = '$dataNasc', cidade = '$cidade',estado = '$estado', 
					where id = ".$id;
		}
		
		$resultado = mysqli_query($conexao, $sql);

		if ($resultado && $id==""){
			$_GET['msg'] = 'Dados inseridos com sucesso';
			$_POST = null;
		}elseif($resultado && $id!=""){
			$_GET['msg'] = 'Dados alterados com sucesso';
			$_POST = null;
		}elseif(!$resultado){
			$_GET['msg'] = 'Falha ao inserir a mensagem';
		}
	}
	
	if(isset($_GET['msg']) && $_GET['msg'] != ""){
		echo $_GET['msg'];
	}
 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Clientes</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h2 align=center> Clientes Cadastrados</h2>
    <table border=1 width=80% align=center><tr>
        <td><label for="nome">Nome:</label></td>
        <td><label for="doc">Documento:</label></td>
        <td><label for="dataNasc">Data de Nascimento:</label></td>        
        <td><label for="cidade">Cidade:</label></td>
        <td><label for="estado">Estado:</label></td>
        <td><label for="Editar">Editar</label></td>
    </tr>

    
    <?php
    	$sql = "select id, nome, doc, dataNasc, cidade, estado from clientes ";
		$resultado = mysqli_query($conexao, $sql);

		while($dados = mysqli_fetch_array($resultado)){
			echo '<tr><td>'.$dados['nome'].'</td>
				  <td>'.$dados['doc'].'</td>
				  <td>'.$dados['dataNasc'].'</td>        
				  <td>'.$dados['cidade'].'</td>
				  <td>'.$dados['estado'].'</td>
				  <td>
					<a href="excluirCliente.php?id='.$dados['id'].'">Excluir</a>
					<a href="cadastro.php?id='.$dados['id'].'">Editar</a>
				  </td></tr>';
		}

		mysqli_close($conexao);

	?>

    </table>
    <p align=center> <a href="cadastro.php">Cadastrar</a></p>
</body>
</html>