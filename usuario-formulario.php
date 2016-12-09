<?php 
 include("cabecalho.php"); 
 include("conexao.php"); 
include("categoria-util.php"); 

 $categorias = buscaCategorias($conexao);
?>


    <form action="adiciona-usuario.php">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control" required></td>
            </tr>
            <tr>
                <td>Usuário</td>
                <td><input type="text" name="usuario" class="form-control" required></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" name="senha" class="form-control" required></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit"  value="Cadastrar"></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
