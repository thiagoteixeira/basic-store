<?php 
    include("cabecalho.php"); 
    include("conexao.php");
    include("produto-util.php");

    $id = $_GET["id"];
	
	$resultado = removeProduto($conexao,$id);
 if($resultado){
?>
    <p class="alert-success">O Produto <?= $id; ?> foi removido!</p>      
<?php
    } else { 
    
    $mensagemDeErro = mysqli_error($conexao);
?>
    <p class="alert-danger">ERRO: O Produto <?= $id; ?> não foi removido!</p>      
    <br>
    <p class="alert-danger"><?= $mensagemDeErro; ?></p>      
<?php
    }
    include("rodape.php");
?>

