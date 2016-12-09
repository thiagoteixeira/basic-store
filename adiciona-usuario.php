<?php 
    include("cabecalho.php");
    include("conexao.php");
    include("produto-util.php");

    $nome = $_GET["nome"];
    $usuario = $_GET["usuario"];
    $senha = $_GET["senha"];

    //$resultado = insereProduto($conexao, $nome, $valor);
    $resultado = true;


    function encrypt($senha){
        $novaSenha = base64_encode($senha);
        return $novaSenha;
    }

    $novaSenha = encrypt('123');

    function decrypt($senha){
        $novaSenha = base64_decode($senha);
        return $novaSenha;
    }

    $recuperado = decrypt($novaSenha);

    $igual = $senha == $recuperado;

    if($resultado){
?>
    <p class="alert-success">Senha <?= encrypt($senha); ?> e Nova Senha <?= $igual; ?> </p>      
<?php
    } else { 
    
    $mensagemDeErro = mysqli_error($conexao);
?>
    <p class="alert-danger">ERRO: O Produto <?= $nome; ?> não foi adicionado!</p>      
    <br>
    <p class="alert-danger"><?= $mensagemDeErro; ?></p>      
<?php
    }
    include("rodape.php");
?>

