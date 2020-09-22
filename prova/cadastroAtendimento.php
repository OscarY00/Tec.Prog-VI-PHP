<?php

require_once('conexao.php');

$nome = '';
$telefone = '';
$atividade = '';
$atendimento = '';
$status = '';
$id = '';

if(isset($_GET['id']) && $_GET['id'] != ""){
  $sql = "select * from atendimento where id = ".$_GET['id'];
  $resultado = mysqli_query($conexao, $sql);
  if($resultado){
   $dados = mysqli_fetch_array($resultado);
   $nome = $dados['nome'];
   $telefone = $dados['telefone'];
   $atividade = $dados['atividade'];
   $atendimento = $_POST['atendimento'];
   $status = $_POST['status'];
   $id = $dados['id'];
   //$registro = date('Y/m/d H:i');
 }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Formulário de Atendimento</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body background-color = "gray">
  <div width=60% align=center>
    <form class="formulario" method="post" action="atendimentos.php" align=left> 
      <p> Entre com os dados do Cliente</p>

      <input type="hidden" name="id" value="<?php echo $id; ?>">

      <div class="field">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" placeholder="Digite o nome completo*" required>
      </div>

      <div class="field">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>" placeholder="Digite o telefone*" required>
      </div>


      <div>
       <div class="field radiobox">
        <span>Escolha o tipo de Atendimento</span>
        <input type="checkbox" name="atividade" id="segunda_via" value="Segunda via de conta" <?php if($atividade=='segunda_via'){echo 'checked';} ?> ><label for="segunda_via">Segunda Via de Conta</label>
        <input type="checkbox" name="atividade" id="mudanca_end" value="Mudança de Endereço" <?php if($atividade=='mudanca_end'){echo 'checked';} ?> ><label for="mudanca_end">Mudança de Endereço</label>
        <input type="checkbox" name="atividade" id="suspencao" value="Suspenção de Serviço" <?php if($atividade=='suspencao'){echo 'checked';} ?> ><label for="suspencao">Suspenção do Serviço</label>
        <input type="checkbox" name="atividade" id="negociacao" value="Negociação de Debitos" <?php if($atividade=='negociacao'){echo 'checked';} ?> ><label for="negociacao">Negociação de Débitos</label>
      </div>
    </div>

    <input type="submit" name="atendimentos" value="Enviar">
  </form>
</div>
</body>
</html>