<?php 
    include("cabecalho.php");
    include("conexao.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $resultado = autenticacao($conexao, $usuario, $senha);

    if($resultado){
                   
            $_SESSION["usuario"] = $usuario;
            $_SESSION["senha"] = $senha;
            header('location:index.php');
    } else{
            unset ($_SESSION['usuario']);
            unset ($_SESSION['senha']);
            header('location:login.php');
    }
            //session_destroy();
?>

