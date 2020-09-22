
<?php

	require_once('conexao.php');

	if(isset($_POST['nome']) && $_POST['nome'] != ""){

		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$atividade = $_POST['atividade'];
		$registro = date('Y/m/d H:i');
		//$atendimento = $_POST['atendimento'];
		$status = $_POST['status'];



		if($id == ""){
			$sql = "insert into atendimentos (nome, telefone, atividade, registro)
				values ('$nome', '$telefone', '$atividade', '$registro')
			";
		}else{
			$sql = "update atendimentos set nome = '$nome', telefone = '$telefone', atividade = '$atividade', registro = '$registro',
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
    <h2 align=center> Atendimentos</h2>
    <table border=1 width=80% align=center><tr>
        <td><label for="nome">Nome:</label></td>
        <td><label for="telefone">Telefone:</label></td>
        <td><label for="atividade">Atividade:</label></td>
        <td><label for="registro">Data/Hora do Registro:</label></td>      
        <td><label for="status">Status</label></td>
    </tr>



    
    <?php
    	$sql = "select id, nome, telefone, atividade, registro from atendimentos ";
		$resultado = mysqli_query($conexao, $sql);

		while($dados = mysqli_fetch_array($resultado)){
			echo '<tr><td>'.$dados['nome'].'</td>
				  <td>'.$dados['telefone'].'</td>
				  <td>'.$dados['atividade'].'</td>
				  <td>'.$dados['registro'].'</td> 
				  <td>'.$dados['status'].'
					<a href="cancelarAtendimento.php?id='.$dados['id'].'">Espera</a>
					<a href="aceitarAtendimento.php?id='.$dados['id'].'">Atendido</a>
				  </td></tr>';
		}

		mysqli_close($conexao);

	?>

    </table>
    <p align=center> <a href="cadastroAtendimento.php">Cadastrar</a></p>
</body>
</html>