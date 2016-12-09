<?php 
    include("cabecalho.php"); 
    include("conexao.php"); 
    include("produto-util.php"); 
    
    $id = $_GET["id"];
    $produto = buscaProduto($conexao,$id);

?>
    <form action="altera-produto.php">
        <input class="hidden" type="text" name="id" value="<?= $produto['id']; ?>">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control" value="<?= $produto['nome']; ?>" required></td>
            </tr>
            <tr>
                <td>Valor</td>
                <td><input type="number" name="valor" class="form-control" value="<?= $produto['valor']; ?>" required></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit"  value="Alterar"></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
