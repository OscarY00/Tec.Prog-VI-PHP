<?php

    require_once('conexao.php');
    
    $id = $_GET['id'];
    
    if($id != ""){
        
        $sql = "UPDATE atendimentos SET  status = 'cancelado'  WHERE id = '$id'".$id;
        $resultado = mysqli_query($conexao, $sql);
        if($resultado){
            $msg = "Dados alterados com sucesso!";
        }
        echo "<script>window.location.href='atendimentos.php?msg=$msg';</script>";
        
    }
    
?>