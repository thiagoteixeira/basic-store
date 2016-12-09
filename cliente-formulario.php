<?php include("cabecalho.php"); ?>
    <form action="adiciona-cliente.php">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" required></td>
            </tr>
            <tr>
                <td>CPF</td>
                <td><input type="text" name="cpf" required></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" name="endereco" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="telefone" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
