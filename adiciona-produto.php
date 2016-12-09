<?php 
    include("cabecalho.php");
    include("conexao.php");
    include("produto-util.php");

    $nome = $_GET["nome"];
    $valor = $_GET["valor"];

    $resultado = insereProduto($conexao, $nome, $valor);

    if($resultado){
?>
    <p class="alert-success">O Produto <?= $nome; ?> de valor <?= $valor;?> foi adicionado!</p>      
<?php
    } else { 
    
    $mensagemDeErro = mysqli_error($conexao);
?>
    <p class="alert-danger">ERRO: O Produto <?= $nome; ?> de valor R$ <?= $valor;?> não foi adicionado!</p>      
    <br>
    <p class="alert-danger"><?= $mensagemDeErro; ?></p>      
<?php
    }
    include("rodape.php");
?>

