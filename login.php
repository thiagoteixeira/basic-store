<?php 

    include("cabecalho.php");

?>
    <form action="autentica-usuario.php" method="post">
        <table class="table">
            <tr>
                <td>Usuário</td>
                <td><input type="text" name="usuario" class="form-control" placeHolder="Entre com o usuário ou email" required></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" name="senha" class="form-control" placeHolder="Entre com o a senha"  required></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit"  value="Login"></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
