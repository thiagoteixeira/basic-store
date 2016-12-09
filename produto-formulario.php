<?php 
 include("cabecalho.php"); 
 include("conexao.php"); 
include("categoria-util.php"); 

 $categorias = buscaCategorias($conexao);
?>


    <form action="adiciona-produto.php">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control" required></td>
            </tr>
            <tr>
                <td>Valor</td>
                <td><input type="number" name="valor" class="form-control" required></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <!-- multiple -->
                    <select name="catgoria_id">
                        <?php foreach($categorias as $categoria) : ?>
                          <option VALUE="<?= $categoria['id']; ?>"> <?= $categoria['nome']; ?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit"  value="Cadastrar"></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>
