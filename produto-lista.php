<?php 
    include("cabecalho.php"); 
    include("conexao.php");
    include("produto-util.php");
?>
<div class="table-responsive">
<table class="table table-striped">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) {
    ?>
        <tr>
            <td><?= $produto['nome']?></td>
            <td><?= $produto['valor']?></td>
            <td>
                <a href="altera-produto-formulario.php?id=<?= $produto['id']; ?>" class="btn btn-primary">Alterar</a>
            </td>
            <td>
                <a onclick="return confirm('Deseja realmente remover o produto id: <?= $produto['id']; ?> ?');" href="remove-produto.php?id=<?= $produto['id']; ?>" class="btn btn-danger">Remover</a>
            </td>
        </tr>
    <?php
        }
    ?>
</table>
</div>

<?php include("subrodape.php"); ?>
