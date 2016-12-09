<!DOCTYPE html>
<?php
    
    include("autenticacao-util.php");

    session_start();
    if(isset($_SESSION['usuario'])){
        echo 'Usuário: ' . $_SESSION["usuario"];
    }
    
    
    $str = $_SERVER['PHP_SELF'];
    $test = 'login.php';    
    $paginaDeLogin = substr_compare($str, $test, strlen($str)-strlen($test), strlen($test)) === 0;

    if(!$paginaDeLogin && !isset($_SESSION['usuario']) && !isset($_SESSION['senha'])){
       header('location:login.php');             
    }
?>
<html>
<head>
	<meta charset="utf-8">
	<title>My Store</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/store.css" rel="stylesheet">
</head>
<body>
<div class="container">
           <!-- Menu -->
    <div class="navbar navbar-inverse navbar-fixed-top"  >
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Store</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="# class="dropdown-toggle" type="button" data-toggle="dropdown">Teste<span class="caret"></span> </a>
					</li>
                    <li>
                        <a href="produto-formulario.php">Cadastro de Produtos</a>
                    </li>
                    <li>
                        <a href="cliente-formulario.php">Cadastro de Clientes</a>
                    </li>
                    <li>
                        <a href="produto-lista.php">Lista de Produtos</a>
                    </li>
                    <?php
                        if(isset($_SESSION['usuario'])){
                    ?>
                        <li>
                            <a href="logout.php">Sair</a> 
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    
            <!-- Conteúdo -->
    <div class="container">
        <div class="principal">
        
 
            
            
